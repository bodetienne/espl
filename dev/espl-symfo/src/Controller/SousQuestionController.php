<?php

namespace App\Controller;

use App\Entity\SousQuestion;
use App\Form\SousQuestionType;
use App\Repository\SousQuestionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/sous/question")
 */
class SousQuestionController extends AbstractController
{
    /**
     * @Route("/", name="sous_question_index", methods={"GET"})
     */
    public function index(SousQuestionRepository $sousQuestionRepository): Response
    {
        return $this->render('sous_question/index.html.twig', [
            'sous_questions' => $sousQuestionRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="sous_question_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $sousQuestion = new SousQuestion();
        $form = $this->createForm(SousQuestionType::class, $sousQuestion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($sousQuestion);
            $entityManager->flush();

            return $this->redirectToRoute('sous_question_index');
        }

        return $this->render('sous_question/new.html.twig', [
            'sous_question' => $sousQuestion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="sous_question_show", methods={"GET"})
     */
    public function show(SousQuestion $sousQuestion): Response
    {
        return $this->render('sous_question/show.html.twig', [
            'sous_question' => $sousQuestion,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="sous_question_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, SousQuestion $sousQuestion): Response
    {
        $form = $this->createForm(SousQuestionType::class, $sousQuestion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('sous_question_index', [
                'id' => $sousQuestion->getId(),
            ]);
        }

        return $this->render('sous_question/edit.html.twig', [
            'sous_question' => $sousQuestion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="sous_question_delete", methods={"DELETE"})
     */
    public function delete(Request $request, SousQuestion $sousQuestion): Response
    {
        if ($this->isCsrfTokenValid('delete'.$sousQuestion->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($sousQuestion);
            $entityManager->flush();
        }

        return $this->redirectToRoute('sous_question_index');
    }
}
