<?php
$action = "";
if(!empty($_REQUEST['a'])){
    $action = $_REQUEST['a'];
}
switch($action)
{
    case "afficher": // a changer selon besoin
        if (empty($_POST['Email'])){
            $erreur = "Veuillez saisir une adresse email pour vous inscrire";
            include ('Vue/v_connexion.php');

        }else{
            $_SESSION['msg'] = "";
            include('Vue/v_inscription.php');
        }
        break;
    case "ajout":
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_SESSION['msg'] = "";
            $_SESSION['NaissanceJour'] = "";
            $_SESSION['NaissanceMois'] = "";
            $_SESSION['NaissanceAnnee'] = "";

            if (!is_null($_POST['Password']) ){
                $_SESSION['Password'] = $_POST['Password'];
            }else{
                $_SESSION['Password'] = "";
            }
            if (!is_null($_POST['Confirm'])){
                $_SESSION['Confirm'] = $_POST['Confirm'];
            }else{
                $_SESSION['Confirm'] = "";
            }
            if (!empty($_POST["NaissanceJour"]) && !empty($_POST["NaissanceMois"]) && !empty($_POST["NaissanceAnnee"])){
                $_SESSION['NaissanceJour'] = $_POST["NaissanceJour"];
                $_SESSION['NaissanceMois'] = $_POST["NaissanceMois"];
                $_SESSION['NaissanceAnnee'] = $_POST["NaissanceAnnee"];
            }else{
                $_SESSION['NaissanceJour'] = "";
                $_SESSION['NaissanceMois'] = "";
                $_SESSION['NaissanceMois'] = "";
                $naissErr = "date de naissance requise";
            }
            if (!empty($_POST["Email"]) && preg_match( "/^.+@.+\.[a-zA-Z]{2,}$/" , $_POST["Email"])) {
                $emailVerif = test_input($_POST["Email"]);
                $_SESSION['Email'] = $emailVerif;
            }else{
                $emailErr = "email requis / erreur saisie";
                $_SESSION['msg'] = "erreur";
                $_SESSION['Email'] = $_POST['Email'];
            }
            if (!empty($_POST["Nom"]) && test_input($_POST["Nom"])) {
                $nomVerif = $_POST["Nom"];
                $_SESSION['Nom'] = $nomVerif;
            }else{
                $nomErr = "nom requis / erreur saisie";
                $_SESSION['msg'] = "erreur";
                $_SESSION['Nom'] = $_POST['Nom'];
            }
            if (!empty($_POST["Prenom"])) {
                $prenomVerif = test_input($_POST["Prenom"]);
                $_SESSION['Prenom'] = $prenomVerif;
            }else{
                $prenomErr = "prenom requis / erreur saisie";
                $_SESSION['msg'] = "erreur";
                $_SESSION['Prenom'] = $_POST['Prenom'];
            }
            if (!empty($_POST["Adresse"])) {
                $adresseVerif = test_input($_POST["Adresse"]);
                $_SESSION['Adresse'] = $adresseVerif;
            }else{
                $adresseErr = "adresse requise / erreur saisie";
                $_SESSION['msg'] = "erreur";
                $_SESSION['Adresse'] = $_POST['Adresse'];
            }
            if (!empty($_POST["Cp"]) && preg_match( "/^[0-9]{5,5}$/" , $_POST["Cp"] )) {
                $_SESSION['Cp'] = $_POST["Cp"];
            }else{
                $cpErr = "code postal requis / erreur saisie";
                $_SESSION['msg'] = "erreur";
            }
            if (!empty($_POST["Ville"])) {
                $villeVerif = test_input($_POST["Ville"]);
                $_SESSION['Ville'] = $villeVerif;
            }else{
                $villeErr = "ville requise / erreur saisie";
                $_SESSION['msg'] = "erreur";
                $_SESSION['Ville'] = $_POST['Ville'];
            }
            if (!empty($_POST["Telephone"]) && preg_match( "/^[0-9]{10,10}$/" , $_POST["Telephone"])){
                $_SESSION['Telephone'] = $_POST["Telephone"];
            }else{
                $telErr = "telephone requis / erreur saisie";
                $_SESSION['msg'] = "erreur";
            }
            if (checkClientMail_if_exists($_SESSION['Email']) == 0){
                $_SESSION['Naissance'] = $_SESSION['NaissanceAnnee']."-".$_SESSION['NaissanceMois']."-".$_SESSION['NaissanceJour'];
                if (!empty($_SESSION['Password']) && !empty($_SESSION['Confirm']) && $_SESSION['Password'] == $_SESSION['Confirm']){
                    $pwd = test_input($_SESSION['Password']);
                    if (empty($_SESSION['msg']) && !empty($_SESSION['Nom']) && !empty($_SESSION['Prenom']) && !empty($_SESSION['Naissance']) && !empty($_SESSION['Adresse']) && !empty($_SESSION['Cp']) && !empty($_SESSION['Ville']) && !empty($_SESSION['Telephone'])){
                        $nom = $_SESSION['Nom'];
                        $prenom = $_SESSION['Prenom'];
                        $naissance = $_SESSION['Naissance'];
                        $email = $_SESSION['Email'];
                        $adresse = $_SESSION['Adresse'];
                        $cp = $_SESSION['Cp'];
                        $ville = $_SESSION['Ville'];
                        $tel = $_SESSION['Telephone'];
                        nouveauClient($nom,$prenom,$naissance,$email,$adresse,$cp,$pwd,$ville,$tel);
                        echo "<script type='text/javascript'>document.location.replace('index.php?c=accueil&a=afficher');</script>";
                    }else{
                        $_SESSION['msg'] = "erreur";
                    }
                }else{
                    $passwordErr = "mots de passe requis / non-identiques";
                    $_SESSION['msg'] = "erreur";
                }
            }else{
                $erreur = "Un compte existe déja, veuillez vous connecter";
                echo "<script type='text/javascript'>document.location.replace('index.php?c=connexion&a=afficher');</script>";
            }
        }
        include ('Vue/v_inscription.php');
        break;
    default:
        include("Vue/v_accueil.php");
        break;
}