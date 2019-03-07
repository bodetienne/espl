<?php

namespace App\Controller;

use App\Entity\PieceJointe;
use App\Form\PieceJointeType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/piece_jointe")
 */
class PieceJointeController extends AbstractController
{
    /**
     * @Route("/", name="piece_jointe_index", methods={"GET"})
     */
    public function index(): Response
    {
        $pieceJointes = $this->getDoctrine()
            ->getRepository(PieceJointe::class)
            ->findAll();

        return $this->render('piece_jointe/index.html.twig', [
            'piece_jointes' => $pieceJointes,
        ]);
    }

    /**
     * @Route("/pieces-jointes", name="piece_jointe_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $pieceJointe = new PieceJointe();
        $form = $this->createForm(PieceJointeType::class, $pieceJointe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pieceJointe);
            $entityManager->flush();

            return $this->redirectToRoute('piece_jointe_index');
        }

        return $this->render('piece_jointe/pieces-jointes.html.twig', [
            'piece_jointe' => $pieceJointe,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="piece_jointe_show", methods={"GET"})
     */
    public function show(PieceJointe $pieceJointe): Response
    {
        return $this->render('piece_jointe/show.html.twig', [
            'piece_jointe' => $pieceJointe,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="piece_jointe_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, PieceJointe $pieceJointe): Response
    {
        $form = $this->createForm(PieceJointeType::class, $pieceJointe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('piece_jointe_index', [
                'id' => $pieceJointe->getId(),
            ]);
        }

        return $this->render('piece_jointe/edit.html.twig', [
            'piece_jointe' => $pieceJointe,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="piece_jointe_delete", methods={"DELETE"})
     */
    public function delete(Request $request, PieceJointe $pieceJointe): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pieceJointe->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($pieceJointe);
            $entityManager->flush();
        }

        return $this->redirectToRoute('piece_jointe_index');
    }
}
