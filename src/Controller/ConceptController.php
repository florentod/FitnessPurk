<?php

namespace App\Controller;

use App\Entity\Concept;
use App\Form\ConceptType;
use App\Repository\ConceptRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/concept")
 */
class ConceptController extends AbstractController
{
    /**
     * @Route("/", name="concept_index", methods={"GET"})
     */
    public function index(ConceptRepository $conceptRepository): Response
    {
        return $this->render('concept/index.html.twig', [
            'concepts' => $conceptRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="concept_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $concept = new Concept();
        $form = $this->createForm(ConceptType::class, $concept);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($concept);
            $entityManager->flush();

            return $this->redirectToRoute('concept_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('concept/new.html.twig', [
            'concept' => $concept,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="concept_show", methods={"GET"})
     */
    public function show(Concept $concept): Response
    {
        return $this->render('concept/show.html.twig', [
            'concept' => $concept,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="concept_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Concept $concept): Response
    {
        $form = $this->createForm(ConceptType::class, $concept);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('concept_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('concept/edit.html.twig', [
            'concept' => $concept,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="concept_delete", methods={"POST"})
     */
    public function delete(Request $request, Concept $concept): Response
    {
        if ($this->isCsrfTokenValid('delete'.$concept->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($concept);
            $entityManager->flush();
        }

        return $this->redirectToRoute('concept_index', [], Response::HTTP_SEE_OTHER);
    }
}
