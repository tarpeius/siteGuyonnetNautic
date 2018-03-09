<?php
$action = "";
if(!empty($_REQUEST['a'])){
    $action = $_REQUEST['a'];
}

switch($action)
{
    case "afficher": // a changer selon besoin
        include('Vue/v_motomarine.php');
        break;
    default:
        include("Vue/v_accueil.php");
        break;
}
