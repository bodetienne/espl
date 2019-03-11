<?php

// le namespace des controllers sera toujours le même
namespace App\Controller;

// La classe Response nous sert pour renvoyer la réponse (voir après)
use Symfony\Component\HttpFoundation\Response;
// la classe Controller est la classe mère de tous les controllers
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


// notre controller doit forcément hériter de la classe Controller ("use" ci-dessus)
// Le nom de la classe doit être exactement le même que celui du fichier
class MainController extends Controller
{

  public function index(){
    return $this->render('home.html.twig');
  }

  public function pageName($nomdepage){
    if($nomdepage == "presentation"){
      return $this->render('presentation-mds.html.twig');
    } elseif ($nomdepage == "form-1-mds") {
      return $this->render('form-1-mds.html.twig');
    } elseif ($nomdepage == "form-2-mds") {
      return $this->render('form-2-mds.html.twig');
    } elseif ($nomdepage == "form-3-mds") {
      return $this->render('form-3-mds.html.twig');
    } elseif ($nomdepage == "form-4-mds") {
      return $this->render('form-4-mds.html.twig');
    } elseif ($nomdepage == "formation-1-mds") {
      return $this->render('formation-1-mds.html.twig');
    } elseif ($nomdepage == "form-dossier-reflexion") {
      return $this->render('form-dossier-reflexion.html.twig');
    } elseif ($nomdepage == "aide-mds") {
      return $this->render('aide-mds.html.twig');
    } elseif ($nomdepage == "contact") {
      return $this->render('contact.html.twig');
    } elseif ($nomdepage == "pieces-jointes") {
      return $this->render('pieces-jointes.html.twig');
    } elseif ($nomdepage == "connexion-mds") {
      return $this->render('connexion-mds.html.twig');
    }
  }
}
    /*else {
      return $this->render('error404.html.twig');
    }
  }

    public function modify(Request $request){

      $repo = $this->getDoctrine()->getRepository(Candidat::class);
      $cand = find();
      var_dump($cand);


        // Nous précisons ici que nous voulons utiliser `TelephoneType` et hydrater $tel
        $form = $this->createForm(PopupType::class, $cand, [
          'action_name' => 'modify' // valeur a envoyer
        ]);

        // nous récupérons ici les informations du formulaire validée c'est-à-dire l'équivalent du $_POST
        // ... et ce, grâce à l'objet $request qui représente les informations sur la requête HTTP reçue (voir l'explication après le code)
        $form->handleRequest($request);

        // Si nous venons de valider le formulaire et s'il est valide (problèmes de type, etc)
        if ($form->isSubmitted() && $form->isValid()) {
            // nous enregistrons directement l'objet $tel !
            // En effet, il a été hydraté grâce au paramètre donné à la méthode createFormBuilder !
            $em = $this->getDoctrine()->getManager();
            $em->persist($cand);
            $em->flush();

            // nous redirigeons l'utilisateur vers la route /telephone/
            // nous utilisons ici l'identifiant de la route, créé dans le fichier yaml (il est peut-être différent pour vous, adaptez en conséquence)
            // extrèmement pratique : si nous devons changer l'url en elle-même, nous n'avons pas à changer nos contrôleurs, mais juste les fichiers de configurations yaml
            return $this->redirectToRoute('index');

        return $this->render('.html.twig', array(
            'form' => $form->createView(),
        ));
      }

    }


}

?>
