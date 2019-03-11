<?php

namespace App\Controller;

use App\Entity\ReponseSpecifique;
use App\Form\ReponseSpecifiqueType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reponse_specifique")
 */
class ReponseSpecifiqueController extends AbstractController
{
    /**
     * @Route("/", name="reponse_specifique_index", methods={"GET"})
     */
    public function index(): Response
    {
        $reponseSpecifiques = $this->getDoctrine()
            ->getRepository(ReponseSpecifique::class)
            ->findAll();

        return $this->render('reponse_specifique/index.html.twig', [
            'reponse_specifiques' => $reponseSpecifiques,
        ]);
    }

    /**
     * @Route("/form-dossier-reflexion", name="reponse_specifique_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $reponseSpecifique = new ReponseSpecifique();
        $form = $this->createForm(ReponseSpecifiqueType::class, $reponseSpecifique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reponseSpecifique);
            $entityManager->flush();

            return $this->redirectToRoute('reponse_specifique_index');
        }

        return $this->render('reponse_specifique/form-dossier-reflexion.html.twig', [
            'reponse_specifique' => $reponseSpecifique,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reponse_specifique_show", methods={"GET"})
     */
    public function show(ReponseSpecifique $reponseSpecifique): Response
    {
        return $this->render('reponse_specifique/show.html.twig', [
            'reponse_specifique' => $reponseSpecifique,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reponse_specifique_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ReponseSpecifique $reponseSpecifique): Response
    {
        $form = $this->createForm(ReponseSpecifiqueType::class, $reponseSpecifique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reponse_specifique_index', [
                'id' => $reponseSpecifique->getId(),
            ]);
        }

        return $this->render('reponse_specifique/edit.html.twig', [
            'reponse_specifique' => $reponseSpecifique,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reponse_specifique_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ReponseSpecifique $reponseSpecifique): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reponseSpecifique->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reponseSpecifique);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reponse_specifique_index');
    }
}
