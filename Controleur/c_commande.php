<?php

$action = "";
if(!empty($_REQUEST['a'])){
    $action = $_REQUEST['a'];
}

switch($action) {
    case "afficher": // a changer selon besoin
        if (empty($_SESSION['client']) && isset($_SESSION['panier'])) {
            include ('Vue/v_commandeIdentifier.php');
        } elseif (!empty($_SESSION['client']) && isset($_SESSION['panier'])) {
            include ('Vue/v_commandeAdresse.php');
        }
        break;
    case "transporteur":
        if (!empty($_POST['Adresse']) && !empty($_POST['Cp']) && !empty($_POST['Ville'])) {
            $_SESSION['client']['adresse_client'] = $_POST['Adresse'];
            $_SESSION['client']['cp_client'] = $_POST['Cp'];
            $_SESSION['client']['ville_client'] = $_POST['Ville'];
            include ('Vue/v_commandeTransport.php');
        } else {
            $erreur = "Veuillez remplir tout les champs afin de continuer votre commande";
            include ('Vue/v_commandeAdresse.php');
        }
        break;
    case "recapitulatif":
        if (isset($_POST['Retrait'])) {
            include ('Vue/v_commandeRecapitulatif.php');
        } else {
            $erreur = "Veuillez saisir un moyen de transport";
            include ('Vue/v_commandeTransport.php');
        }
        break;
    case "paiement":
        if (isset($_POST['Accept'])) {
            include ('Vue/v_commandePaiement.php');
        } else {
            $erreur = "Veuillez accepter les conditions générales de ventes pour continuer";
            include ('Vue/v_commandeRecapitulatif.php');
        }
        break;
    case "terminerCommande":
        if (isset($_POST['modePaiement'])) {
            $valeur=0;
            foreach ($_SESSION['panier'] as $panier) {
                $valeur=$valeur+($panier['prix']*$panier['quantite']);
            }
            $client = $_SESSION['client']['id_client'];
            $typePaiement = $_POST['modePaiement'];
            $paiement = afficherIdPaiement($typePaiement);
            nouvelleCommande($valeur,$client,$paiement['id_mdpaiement']);
            $idCommande = lastIdCommandeClient($client);
            foreach ($_SESSION['panier'] as $panier) {
                nouvelleLigneCommande($panier['quantite'],$idCommande['MAX(id_commande)'],$panier['reference']);
            }
            $reussi = "Votre commande a bien été prise en compte. Merci de votre achat.";
            include ('Vue/v_commandePaiement.php');
            session_destroy();
            echo "<script type='text/javascript'>
                            var delai=3;
                            var url='index.php?c=compteClient&a=afficher';
                            setTimeout(\"document.location.replace(url)\", delai + '000');
                        </script>";
        } else {
            $erreur = "Veuillez choisir un mode de paiement";
            include ('Vue/v_commandePaiement.php');
        }
        break;
    default:
        include('Vue/v_accueil.php');
        break;
}