<?php
include 'Modele/classe/Cours_permis.php';
include 'Modele/classe/Permis.php';
include 'Modele/classe/PermisManager.php';
$action = "";
if(!empty($_REQUEST['a'])){
    $action = $_REQUEST['a'];
}

switch($action)
{
    case "afficher": // a changer selon besoin
        $permisManager = new PermisManager();
        $permisCotier = $permisManager->afficherCotier();
        $permisFluvial = $permisManager->afficherFluvial();
        $permisHauturier = $permisManager->afficherHauturier();

        $fluvial = new Permis($permisFluvial);
        $cotier = new Permis($permisCotier);
        $hauturier = new Permis($permisHauturier);

        $coursCotier = $permisManager->afficherCoursPermis($cotier);
        $coursFluvial = $permisManager->afficherCoursPermis($fluvial);
        $coursHauturier = $permisManager->afficherCoursPermis($hauturier);

        include('Vue/v_permis.php');
        break;
    default:
        include("Vue/v_accueil.php");
        break;
}
