<?php

namespace App\Controller;

use App\Entity\Garant;
use App\Form\GarantType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/garant")
 */
class GarantController extends AbstractController
{
    /**
     * @Route("/", name="garant_index", methods={"GET"})
     */
    public function index(): Response
    {
        $garants = $this->getDoctrine()
            ->getRepository(Garant::class)
            ->findAll();

        return $this->render('garant/index.html.twig', [
            'garants' => $garants,
        ]);
    }

    /**
     * @Route("/form-3-mds", name="garant_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $garant = new Garant();
        $form = $this->createForm(GarantType::class, $garant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($garant);
            $entityManager->flush();

            return $this->redirectToRoute('garant_index');
        }

        return $this->render('garant/form-3-mds.html.twig', [
            'garant' => $garant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/form-4-mds", name="garant_new2", methods={"GET","POST"})
     */
    public function new2(Request $request): Response
    {
        $garant = new Garant();
        $form = $this->createForm(GarantType::class, $garant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($garant);
            $entityManager->flush();

            return $this->redirectToRoute('garant_index');
        }

        return $this->render('garant/form-4-mds.html.twig', [
            'garant' => $garant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="garant_show", methods={"GET"})
     */
    public function show(Garant $garant): Response
    {
        return $this->render('garant/show.html.twig', [
            'garant' => $garant,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="garant_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Garant $garant): Response
    {
        $form = $this->createForm(GarantType::class, $garant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('garant_index', [
                'id' => $garant->getId(),
            ]);
        }

        return $this->render('garant/edit.html.twig', [
            'garant' => $garant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="garant_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Garant $garant): Response
    {
        if ($this->isCsrfTokenValid('delete'.$garant->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($garant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('garant_index');
    }
}
