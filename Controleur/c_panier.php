<?php
$action = "";
if(!empty($_REQUEST['a'])){
    $action = $_REQUEST['a'];
}

switch($action) {
    case "afficher": // a changer selon besoin
        include('Vue/v_panier.php');
        break;
}