<?php 

namespace App\Controller;

use App\Entity\Candidat;
use App\Form\Candidat1Type;
use App\Form\Candidat2Type;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Cookie;

/**
 * @Route("/candidat")
 */
class CandidatController extends AbstractController
{
    private $session;

    public function __construct(SessionInterface $session) {
        $this->session = $session; 
    }

    /**
     * @Route("/", name="candidat_index", methods={"GET"})
     */
    /*public function index(): Response
    {
        $candidats = $this->getDoctrine()
            ->getRepository(Candidat::class)
            ->findAll();


        return $this->render('candidat/index.html.twig', [
            'candidats' => $candidats,
        ]);
    }*/


    /**
     * @Route("/form-1-mds", name="form-1-mds", methods={"GET","POST"})
     */

    public function newPart1(Request $request): Response

    {

      

       /*$cookie = new Cookie('color', 'green', strtotime('now'), '/',
         'http://localhost:8080/espl/dev/espl-symfo/public/index.php', true, true);
        //

        // $cookie = Cookie::fromString('color = green; expires = Web, time()+3600;
        // path=/; domain = somedomain.com; secure; httponly');

        $response = new Response(
          'Content',
          Response::HTTP_OK,
          ['content-type' => 'text/html']
        );


        $response->headers->setCookie($cookie);
        $cookie = $request->cookie->get('color'); 
        var_dump($cookie);*/


        $candidat = new Candidat();
        $form = $this->createForm(Candidat1Type::class, $candidat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($candidat);
            $entityManager->flush();

            // $session = new Session();
            //
            //
            // $session->set('prenomCandidat', $entityManager->prenomCandidat);
            // $session->set('nomCandidat', $entityManager->nomCandidat);
            // $session->get('prenomCandidat');
            // $session->get('prenomCandidat');
            //
            // var_dump($session);

            return $this->redirectToRoute('candidat_index');
        }

        // enregistrement du prénom dans la session
        $session->set('prenomCandidat', 'Eva');

        // création de la variable
        $prenomCandidat = $session->get('prenomCandidat');
        var_dump($prenomCandidat);

        return $this->render('candidat/form-1-mds.html.twig', [
            'candidat' => $candidat,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/form-2-mds", name="form-2-mds", methods={"GET","POST"})
     */
    public function newPart2(Request $request): Response
    {

        $candidat = new Candidat();
        $form = $this->createForm(Candidat2Type::class, $candidat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($candidat);
            $entityManager->flush();

            // $session = new Session();
            //
            //
            // $session->set('prenomCandidat', $entityManager->prenomCandidat);
            // $session->set('nomCandidat', $entityManager->nomCandidat);
            // $session->get('prenomCandidat');
            // $session->get('prenomCandidat');
            //
            // var_dump($session);

            return $this->redirectToRoute('candidat_index');
        }



        return $this->render('candidat/form-2-mds.html.twig', [
            'candidat' => $candidat,
            'form' => $form->createView(),
        ]);
    }











































    /**
     * @Route("/{id}", name="candidat_show", methods={"GET"})
     */
    public function show(Candidat $candidat): Response
    {
        return $this->render('candidat/show.html.twig', [
            'candidat' => $candidat,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="candidat_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Candidat $candidat): Response
    {
        $form = $this->createForm(CandidatType::class, $candidat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('candidat_index', [
                'id' => $candidat->getId(),
            ]);
        }

        return $this->render('candidat/edit.html.twig', [
            'candidat' => $candidat,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="candidat_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Candidat $candidat): Response
    {
        if ($this->isCsrfTokenValid('delete'.$candidat->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($candidat);
            $entityManager->flush();
        }

        return $this->redirectToRoute('candidat_index');
    }
}
