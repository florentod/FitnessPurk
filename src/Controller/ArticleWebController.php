<?php

namespace App\Controller;

use App\Entity\ArticleWeb;
use App\Form\ArticleWebType;
use App\Repository\ArticleWebRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/article/web")
 */
class ArticleWebController extends AbstractController
{
    /**
     * @Route("/", name="article_web_index", methods={"GET"})
     */
    public function index(ArticleWebRepository $articleWebRepository): Response
    {
        return $this->render('article_web/index.html.twig', [
            'article_webs' => $articleWebRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="article_web_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $articleWeb = new ArticleWeb();
        $form = $this->createForm(ArticleWebType::class, $articleWeb);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($articleWeb);
            $entityManager->flush();

            return $this->redirectToRoute('article_web_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('article_web/new.html.twig', [
            'article_web' => $articleWeb,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="article_web_show", methods={"GET"})
     */
    public function show(ArticleWeb $articleWeb): Response
    {
        return $this->render('article_web/show.html.twig', [
            'article_web' => $articleWeb,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="article_web_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ArticleWeb $articleWeb): Response
    {
        $form = $this->createForm(ArticleWebType::class, $articleWeb);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('article_web_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('article_web/edit.html.twig', [
            'article_web' => $articleWeb,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="article_web_delete", methods={"POST"})
     */
    public function delete(Request $request, ArticleWeb $articleWeb): Response
    {
        if ($this->isCsrfTokenValid('delete'.$articleWeb->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($articleWeb);
            $entityManager->flush();
        }

        return $this->redirectToRoute('article_web_index', [], Response::HTTP_SEE_OTHER);
    }
}
