<?php
// le namespace des controllers sera toujours le même
namespace App\Controller;

// la classe Controller est la classe mère de tous les controllers
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Candidat;

// notre controller doit forcément hériter de la classe Controller ("use" ci-dessus)
// Le nom de la classe doit être exactement le même que celui du fichier
class ConnexionController extends Controller
{
    // Génération d'une chaine aléatoire
  function connexion($id, $chaine = 'AZERTYUIOPQSDFGHJKLMWXCVBNazertyuiopqsdfghjklmwxcvbn1234567890')
  {
      $nb_lettres = strlen($chaine) - 1;
      $generation = '';
      for($i=0; $i <= 8; $i++)
      {
          $pos = mt_rand(0, $nb_lettres);
          $car = $chaine[$pos];
          $generation .= $car;
      }
      // var_dump($generation);

      // on travaille sur l'entité Telephone (le Repo est associé à l'entité Telephone)
      // 't' est l'alias que nous pouvons utiliser par la suite.
      $candidat = $this->getDoctrine()->getRepository(Candidat::class)->find($id);
      // var_dump($candidat);
      $code = $candidat->getCodeAccesCandidat();

      $code = $generation;
      //var_dump($code);
      // implémenter dans base de données avec les cookies ENSUITE


      return $this->render('connexion-mds.html.twig');

  }



}
?>
