<?php
$action = "";
if(!empty($_REQUEST['a'])){
    $action = $_REQUEST['a'];
}

switch($action)
{
    case "afficher": // a changer selon besoin
        include('Vue/v_moteur.php');
        break;
    case "ficheProduit": // a changer selon besoin
        include('Vue/v_ficheProduit.php');
        break;
    default:
        include("Vue/v_accueil.php");
        break;
}
