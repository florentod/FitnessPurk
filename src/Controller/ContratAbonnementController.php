<?php

namespace App\Controller;

use App\Entity\ContratAbonnement;
use App\Form\ContratAbonnementType;
use App\Repository\ContratAbonnementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/contrat/abonnement")
 */
class ContratAbonnementController extends AbstractController
{
    /**
     * @Route("/", name="contrat_abonnement_index", methods={"GET"})
     */
    public function index(ContratAbonnementRepository $contratAbonnementRepository): Response
    {
        return $this->render('contrat_abonnement/index.html.twig', [
            'contrat_abonnements' => $contratAbonnementRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="contrat_abonnement_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $contratAbonnement = new ContratAbonnement();
        $form = $this->createForm(ContratAbonnementType::class, $contratAbonnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contratAbonnement);
            $entityManager->flush();

            return $this->redirectToRoute('contrat_abonnement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('contrat_abonnement/new.html.twig', [
            'contrat_abonnement' => $contratAbonnement,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="contrat_abonnement_show", methods={"GET"})
     */
    public function show(ContratAbonnement $contratAbonnement): Response
    {
        return $this->render('contrat_abonnement/show.html.twig', [
            'contrat_abonnement' => $contratAbonnement,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="contrat_abonnement_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ContratAbonnement $contratAbonnement): Response
    {
        $form = $this->createForm(ContratAbonnementType::class, $contratAbonnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('contrat_abonnement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('contrat_abonnement/edit.html.twig', [
            'contrat_abonnement' => $contratAbonnement,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="contrat_abonnement_delete", methods={"POST"})
     */
    public function delete(Request $request, ContratAbonnement $contratAbonnement): Response
    {
        if ($this->isCsrfTokenValid('delete'.$contratAbonnement->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($contratAbonnement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('contrat_abonnement_index', [], Response::HTTP_SEE_OTHER);
    }
}
