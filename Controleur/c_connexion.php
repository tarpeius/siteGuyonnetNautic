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
    case "connecte":
        $erreur="";
        if ((!empty($_POST['Email'])) && (!empty($_POST['Password']))) {
            $email = $_POST['Email'];
            $mdp = $_POST['Password'];
            $valide = isAdmin($email, $mdp);
            if ($valide == 1) {
                //header('Refresh:0; index.php?c=accueil');
                include('Vue/v_accueil.php');
            } else {
                $erreur = "Email et/ou mot de passe non valide";
                include('Vue/v_connexion.php');
            }
        }else{
            $erreur = "Veuillez saisir votre email et mot de passe pour vous connecter";
            include ('Vue/v_connexion.php');
        }
        break;
    default:
        include("Vue/v_accueil.php");
        break;
}
