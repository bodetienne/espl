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
    } elseif ($nomdepage == "aide-mds") {
      return $this->render('aide-mds.html.twig');
    } elseif ($nomdepage == "contact") {
      return $this->render('contact.html.twig');
    }  elseif ($nomdepage == "connexion-mds") {
      return $this->render('connexion-mds.html.twig');
    }
    // else {
    //   return $this->render('error404.html.twig');
    // }
  }

  public function pageFormulaireName($nomdepage, $nomdossierpage){
    if ($nomdepage == "form-1-mds" && $nomdossierpage =="candidat") {
      return $this->render('candidat/form-1-mds.html.twig');
    } elseif ($nomdepage == "form-2-mds" && $nomdossierpage =="candidat") {
      return $this->render('candidat/form-2-mds.html.twig');
    } elseif ($nomdepage == "form-3-mds" && $nomdossierpage =="garant") {
      return $this->render('garant/form-3-mds.html.twig');
    } elseif ($nomdepage == "form-4-mds" && $nomdossierpage =="garant") {
      return $this->render('garant/form-4-mds.html.twig');
    } elseif ($nomdepage == "formation-1-mds" && $nomdossierpage =="formation") {
      return $this->render('formation/formation-1-mds.html.twig');
    } elseif ($nomdepage == "form-dossier-reflexion" && $nomdossierpage =="reponse_specifique") {
      return $this->render('reponse_specifique/form-dossier-reflexion.html.twig');
    }elseif ($nomdepage == "pieces-jointes" && $nomdossierpage =="piece_jointe") {
      return $this->render('piece_jointe/pieces-jointes.html.twig');
    }
  }

}

?>
