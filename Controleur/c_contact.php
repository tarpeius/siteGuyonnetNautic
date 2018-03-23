<?php
$action = "";
if(!empty($_REQUEST['a'])){
    $action = $_REQUEST['a'];
}

switch($action)
{
    case "afficher": // a changer selon besoin
        include('Vue/v_contact.php');
        break;
    case "nouveau": // a changer selon besoin
        nouveauDevis($_POST['nom'],$_POST['email'],$_POST['objet'],$_POST['message']);
        include('Vue/v_contact.php');
        break;
    default:
        include("Vue/v_accueil.php");
        break;
}
