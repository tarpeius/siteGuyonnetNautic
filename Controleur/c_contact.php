<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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
        $res = envoieDemandeContact($_POST['nom'],$_POST['email'],$_POST['objet'],$_POST['message']);
        include('Vue/v_contact.php');
        break;
    default:
        include("Vue/v_accueil.php");
        break;
}
