<?php 

  // si l'utilisateur a utilisé le menu de navigation 
  if (isset($_GET["section"])) 
  {	
    // si l'utilisateur est connecté (tous les droits)
    if(isset($_SESSION["email"]))
    {
      switch ($_GET["section"]) 
      {
        case 'home':
          require_once("controller/home-controller.php");
          break;
        case 'signup':
          require_once("controller/signup-controller.php");
          break;
        case 'login':
          require_once("controller/login-controller.php");
          break;
        case 'choose-a-plant':
          require_once("controller/choose-a-plant-controller.php");
          break;
        case 'choose-a-room':
          require_once ("controller/choose-a-room-controller.php");
          break;
        case 'choose-a-spot':
          require_once("views/page/choose-a-spot.php");
          break;
        case 'fail-page':
            require_once("controller/fail-page-controller.php");
            break;
        case 'success-spot':
            require_once("views/page/success-spot.php");
            break;
        case 'tuto-water-part':
          require_once("controller/tuto-water-part-controller.php");
          break;
        case 'win-page':
          require_once("controller/win-page-controller.php");
          break;
        case 'tuto-water-part-success':
          require_once("controller/tuto-water-part-success-controller.php");
          break;
        case 'logout':
          require_once("controller/logout-controller.php");
          break;
        case 'extra-points-amaterasu': //name that should appear on url
          include("controller/extra-points-amaterasu-controller.php");
          break;
        default:
          require_once('controller/404Controller.php');
          break;
      }
    }
    // si l'utilisateur n'est pas connecté
    else
    {
      switch ($_GET["section"]) 
      {
        case 'home':
          require_once("controller/home-controller.php");
          break;
        case 'signup':
          require_once("controller/signup-controller.php");
          break;
        case 'login':
          require_once("controller/login-controller.php");
          break;
        case 'choose-a-plant':
          require_once("views/error/access-denied.php");
          break;
        case 'extra-points-amaterasu': //name that should appear on url
          include("views/error/access-denied.php");
          break;
        case 'choose-a-room':
          require_once("views/error/access-denied.php");
          break;
        case 'choose-a-spot':
          require_once("views/error/access-denied.php");
          break;
        case 'fail-spot':
          require_once("views/error/access-denied.php");
          break;
        case 'success-spot':
          require_once("views/error/access-denied.php");
          break;
        case 'win-page':
          require_once("views/error/access-denied.php");
          break;
        case 'tuto-water-part-success':
          require_once("views/error/access-denied.php");
          break;
        case 'logout':
          require_once("controller/logout-controller.php");
          break;
        case 'wrong-credentials':
          require_once("views/error/wrong-credentials.php");
          break;
        default:
          require_once('controller/404Controller.php');
          break;
      }
    }	
  }
  // la premiere fois qu'il arrive sur l'application
  else
  {
    require_once('controller/home-controller.php');
  }
