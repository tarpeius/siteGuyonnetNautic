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
        $erreur = "";
        $reussi = "";
        if ((!empty($_POST['Email'])) && (!empty($_POST['Password']))) {
            $email = $_POST['Email'];
            $mdp = $_POST['Password'];
            $valide = isAdmin($email, $mdp);
            if ($valide == 1) {
                //header('Refresh:0; index.php?c=accueil');
                $_SESSION['client'] = lireClient($email,$mdp);
                $reussi = "Vous êtes connecté(e)";
                include ('Vue/v_connexion.php');
                echo "<script type='text/javascript'>
                    var delai=2; 
                    var url='index.php?c=accueil&a=afficher'; 
                    setTimeout(\"document.location.replace(url)\", delai + '000');</script>";
            } else {
                $erreur = "Email ou mot de passe non valide";
                include('Vue/v_connexion.php');
            }
        }else{
            $erreur = "Veuillez saisir votre email et mot de passe pour vous connecter";
            include ('Vue/v_connexion.php');
        }
        break;
    case "deconnecte":
        session_destroy();
        echo "<script type='text/javascript'>
                        document.location.replace('index.php?c=connexion&a=authentification');</script>";
        break;
    default:
        include("Vue/v_accueil.php");
        break;
}
?>


