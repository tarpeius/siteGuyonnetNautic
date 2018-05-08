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
                $_SESSION['client'] = $email;
                $reussi = "Vous êtes connecté(e)";
                include ('Vue/v_connexion.php');
                echo "<script type='text/javascript'>   
                    $(document).ready(function(){    
                        //Check if the current URL contains '#'
                        if(document.URL.indexOf(\"#\")==-1){
                            // Set the URL to whatever it was plus \"#\".
                            url = document.URL+\"#\";
                            location = \"#\";
                    
                            //Reload the page
                            location.reload(true);
                        }
                    });
                    var delai=2; 
                    var url='index.php?c=compteClient&a=afficher'; 
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
    case "connecteCommande":
        $erreur = "";
        $reussi = "";
        if ((!empty($_POST['Email'])) && (!empty($_POST['Password']))) {
            $email = $_POST['Email'];
            $mdp = $_POST['Password'];
            $valide = isAdmin($email, $mdp);
            if ($valide == 1) {
                $_SESSION['client'] = $email;
                $reussi = "Vous êtes connecté(e), retour sur la commande...";
                include ('Vue/v_commandeIdentifier.php');
                echo "<script type='text/javascript'>
                    $(document).ready(function(){    
                        //Check if the current URL contains '#'
                        if(document.URL.indexOf(\"#\")==-1){
                            // Set the URL to whatever it was plus \"#\".
                            url = document.URL+\"#\";
                            location = \"#\";
                    
                            //Reload the page
                            location.reload(true);
                        }
                    });
                    var delai=2; 
                    var url='index.php?c=commande&a=afficher'; 
                    setTimeout(\"document.location.replace(url)\", delai + '000');</script>";
            } else {
                $erreur = "Email ou mot de passe non valide";
                include('Vue/v_commandeIdentifier.php');
            }
        }else{
            $erreur = "Veuillez saisir votre email et mot de passe pour vous connecter";
            include ('Vue/v_commandeIdentifier.php');
        }
        break;
    case "deconnecte":
        setcookie('client', '', time() - 1);
        setcookie('PHPSESSID','value',time() - 1);
        session_destroy();
        echo "<script type='text/javascript'>
                        document.location.replace('index.php?c=connexion&a=authentification');</script>";
        break;
    default:
        include("Vue/v_accueil.php");
        break;
}
?>