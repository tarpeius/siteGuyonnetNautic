<?php
$action = "";
if(!empty($_REQUEST['a'])){
    $action = $_REQUEST['a'];
}

switch($action)
{
    case "authentification": // a changer selon besoin
        include('Vue/v_connexion.php');
        break;
    default:
        include("Vue/v_accueil.php");
        break;
}
