<?php

namespace App\Controller;

use App\Entity\ReponseSpecifique;
use App\Form\QuestionsPrealablesType;
use App\Form\ConnaissanceEcoleType;
use App\Form\DossierReflexionType;
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
     * @Route("/connaissance-ecole", name="connaissance-ecole", methods={"GET","POST"})
     */
    public function newConnaissanceEcole(Request $request): Response
    {
        $reponseSpecifique = new ReponseSpecifique();
        $form = $this->createForm(ConnaissanceEcoleType::class, $reponseSpecifique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reponseSpecifique);
            $entityManager->flush();

            return $this->redirectToRoute('reponse_specifique_index');
        }

        return $this->render('reponse_specifique/connaissance-ecole.html.twig', [
            'reponse_specifique' => $reponseSpecifique,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/questions-prealables", name="questions-prealables", methods={"GET","POST"})
     */
    public function newQuestionsPrealables(Request $request): Response
    {
        $reponseSpecifique = new ReponseSpecifique();
        $form = $this->createForm(questionsPrealablesType::class, $reponseSpecifique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reponseSpecifique);
            $entityManager->flush();

            return $this->redirectToRoute('reponse_specifique_index');
        }

        return $this->render('reponse_specifique/questions-prealables.html.twig', [
            'reponse_specifique' => $reponseSpecifique,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/form-dossier-reflexion", name="reponse_specifique", methods={"GET","POST"})
     */
    public function newResponseSpecifique(Request $request): Response
    {
        $reponseSpecifique = new ReponseSpecifique();
        $form = $this->createForm(DossierReflexionType::class, $reponseSpecifique);
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
