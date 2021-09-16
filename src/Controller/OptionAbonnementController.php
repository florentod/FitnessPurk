<?php

namespace App\Controller;

use App\Entity\OptionAbonnement;
use App\Form\OptionAbonnementType;
use App\Repository\OptionAbonnementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/option/abonnement")
 */
class OptionAbonnementController extends AbstractController
{
    /**
     * @Route("/", name="option_abonnement_index", methods={"GET"})
     */
    public function index(OptionAbonnementRepository $optionAbonnementRepository): Response
    {
        return $this->render('option_abonnement/index.html.twig', [
            'option_abonnements' => $optionAbonnementRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="option_abonnement_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $optionAbonnement = new OptionAbonnement();
        $form = $this->createForm(OptionAbonnementType::class, $optionAbonnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($optionAbonnement);
            $entityManager->flush();

            return $this->redirectToRoute('option_abonnement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('option_abonnement/new.html.twig', [
            'option_abonnement' => $optionAbonnement,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="option_abonnement_show", methods={"GET"})
     */
    public function show(OptionAbonnement $optionAbonnement): Response
    {
        return $this->render('option_abonnement/show.html.twig', [
            'option_abonnement' => $optionAbonnement,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="option_abonnement_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, OptionAbonnement $optionAbonnement): Response
    {
        $form = $this->createForm(OptionAbonnementType::class, $optionAbonnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('option_abonnement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('option_abonnement/edit.html.twig', [
            'option_abonnement' => $optionAbonnement,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="option_abonnement_delete", methods={"POST"})
     */
    public function delete(Request $request, OptionAbonnement $optionAbonnement): Response
    {
        if ($this->isCsrfTokenValid('delete'.$optionAbonnement->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($optionAbonnement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('option_abonnement_index', [], Response::HTTP_SEE_OTHER);
    }
}
