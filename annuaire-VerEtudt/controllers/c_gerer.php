<?php
switch ($action) {
    case 'accueil':
    {
        $message="C'est la page d'accueil";
        include("views/v_accueil.php");
        break;
    }
    case 'lister': {
        $les_membres=$pdo->getLesMembres();
       
        require 'views/v_listemembres.php';
        break;
    }
    case 'saisir': {
        
        
       
        require 'views/v_saisiemembre.php';
        break;
    }
    case 'saisirValider':
    {
        break;
    }
    default:
    {
        $_SESSION["message_erreur"] = "Site en construction";
        include("views/404.php");
        break;
    }
}
