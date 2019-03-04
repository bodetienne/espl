<?php

namespace App\Controller;

use App\Entity\ChargeRecrutement;
use App\Form\ChargeRecrutementType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/charge/recrutement")
 */
class ChargeRecrutementController extends AbstractController
{
    /**
     * @Route("/", name="charge_recrutement_index", methods={"GET"})
     */
    public function index(): Response
    {
        $chargeRecrutements = $this->getDoctrine()
            ->getRepository(ChargeRecrutement::class)
            ->findAll();

        return $this->render('charge_recrutement/index.html.twig', [
            'charge_recrutements' => $chargeRecrutements,
        ]);
    }

    /**
     * @Route("/new", name="charge_recrutement_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $chargeRecrutement = new ChargeRecrutement();
        $form = $this->createForm(ChargeRecrutementType::class, $chargeRecrutement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($chargeRecrutement);
            $entityManager->flush();

            return $this->redirectToRoute('charge_recrutement_index');
        }

        return $this->render('charge_recrutement/new.html.twig', [
            'charge_recrutement' => $chargeRecrutement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="charge_recrutement_show", methods={"GET"})
     */
    public function show(ChargeRecrutement $chargeRecrutement): Response
    {
        return $this->render('charge_recrutement/show.html.twig', [
            'charge_recrutement' => $chargeRecrutement,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="charge_recrutement_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ChargeRecrutement $chargeRecrutement): Response
    {
        $form = $this->createForm(ChargeRecrutementType::class, $chargeRecrutement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('charge_recrutement_index', [
                'id' => $chargeRecrutement->getId(),
            ]);
        }

        return $this->render('charge_recrutement/edit.html.twig', [
            'charge_recrutement' => $chargeRecrutement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="charge_recrutement_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ChargeRecrutement $chargeRecrutement): Response
    {
        if ($this->isCsrfTokenValid('delete'.$chargeRecrutement->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($chargeRecrutement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('charge_recrutement_index');
    }
}
