<?php
$action = "";
if(!empty($_REQUEST['a'])){
    $action = $_REQUEST['a'];
}

switch($action)
{
    case "afficher": // a changer selon besoin
        $categorie = afficherCategorie("bateau");
        include('Vue/v_bateau.php');
        break;
    default:
        include("Vue/v_accueil.php");
        break;
}
