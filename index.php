<?php



function chargerClass($nomClass)
{
  require 'Model/'.$nomClass.'.php';
}
  spl_autoload_register('chargerClass');
  $movie = new movies();
  session_start();
  if(isset($_GET['url'])){
    
     switch($_GET['url']){
      case 'Home':
        require_once 'View/accueil.php';
       break;
       case 'Films':
        // $liste= $movie ->getAllFilm();
        $liste= $movie-> allfilmsansGenre();
        require_once 'View/Films/Films.view.php';
       break;
       case 'Serie':
        require_once 'View/Serie/Serie.view.php';
       break;
       case 'Inscription':
        require_once 'View/Inscription.view.php';
       break;
       case 'Connexion':
        require_once 'View/Connexion.view.php';
       break;
       case 'admin':
        require_once 'View/admin/admin.view.php';
       break;
       case 'inscrire':
        require_once 'Controller/inscription.controller.php';
       break;
        case 'connecter':
         require_once 'Controller/connexion.controller.php';
         break;
          case 'ajoutfilm':
          $listegenre =$movie->allGenre();
          require_once 'View/admin/admin.action.view.php';
         break;
         case 'listefilm':
          // $liste= $movie-> allfilmsansGenre();
          $liste= $movie->getAllFilm();
          require_once 'View/admin/admin.listefilm.php';
         break;
         case 'affichefilm':
          $film =$movie->getAllFilmById($_GET['film']);
          require_once 'View/Films/affiche.view.php';
        break; 
        case 'traitementAjoutfilm':
          require_once 'Controller/ajoutfilm.controller.php';
        break;
        case 'traitementGenre':
          require_once 'Controller/ajoutgenre.controller.php';
        break;
        case 'supprimer':
          // $deleteFilm =$movie->deletefilm($_GET['idfilm']);
          require_once 'Controller/supprimer.controller.php';
        break;
        case 'modifier':
          $filmById= $movie->getAllFilmById($_GET['idfilm']);
          $listegenre =$movie->allGenre();
          require_once 'View/admin/modifierfilm.admin.php';
        break;
     }
  }else{
    require_once 'View/accueil.php';
  }
?>