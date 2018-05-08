<?php

$action = "";
if(!empty($_REQUEST['a'])){
    $action = $_REQUEST['a'];
}

switch($action) {
    case "afficher": // a changer selon besoin
        if (!isset($_COOKIE['client']) && isset($_SESSION['panier'])) {
            include ('Vue/v_commandeIdentifier.php');
        } elseif (isset($_COOKIE['client']) && isset($_SESSION['panier'])) {
            $email = $_COOKIE['client'];
            $clientTest = lireClientCookie($email);
            $idClient = $clientTest['id_client'];
            $adresseExist1 = adresseExist($idClient);
            if ($adresseExist1 == 1) {
                $adresse = afficheAdresse($idClient);
                $client = lireClientCookie($email);
            } else {
                $client = lireClientCookie($email);
            }
            include ('Vue/v_commandeAdresse.php');
        } else {
            include ('Vue/v_panier.php');
        }
        break;
    case "transporteur":
        if (isset($_COOKIE['client'])) {
            if (isset($_POST['retour'])){
                include ("Vue/v_panier.php");
            }
            if (!empty($_POST['Adresse']) && !empty($_POST['Cp']) && !empty($_POST['Ville']) && !empty($_POST['AdresseLivraison']) && !empty($_POST['CpLivraison']) && !empty($_POST['VilleLivraison'])) {
                if ((preg_match( "/^[0-9]{5,5}$/" , $_POST["Cp"] )) && (preg_match( "/^[0-9]{5,5}$/" , $_POST["CpLivraison"] ))) {
                    $email = $_COOKIE['client'];
                    $client = lireClientCookie($email);
                    $idClient = $client['id_client'];
                    // ADRESSE FACTURATION (table client)
                    $adresse = test_input($_POST['Adresse']);
                    $cp = $_POST['Cp'];
                    $ville = test_input($_POST['Ville']);
                    modifierClientCoordonnees($ville,$adresse,$cp,$idClient);
                    // ADRESSE LIVRAISON (table adresse)
                    $adresseLivraison = test_input($_POST['AdresseLivraison']);
                    $cpLivraison = $_POST['CpLivraison'];
                    $villeLivraison = test_input($_POST['VilleLivraison']);
                    // verification si adresse livraison (table adresse) existe
                    $adresseExist1 = adresseExist($idClient);
                    if ($adresseExist1 == 1) {
                        modifierAdresse($adresseLivraison,$villeLivraison,$cpLivraison,$idClient);
                    } else {
                        nouvelleAdresse($adresseLivraison,$villeLivraison,$cpLivraison,$idClient);
                    }
                    include ('Vue/v_commandeTransport.php');
                } else {
                    $erreur = "Champ(s) code postal non-valide (ex : 75000)";
                    $email = $_COOKIE['client'];
                    $clientTest = lireClientCookie($email);
                    $idClient = $clientTest['id_client'];
                    $adresseExist1 = adresseExist($idClient);
                    if ($adresseExist1 == 1) {
                        $adresse = afficheAdresse($idClient);
                        $client = lireClientCookie($email);
                    } else {
                        $client = lireClientCookie($email);
                    }
                    include ('Vue/v_commandeAdresse.php');
                }

            } else {
                $erreur = "Veuillez remplir tout les champs afin de continuer votre commande";
                $email = $_COOKIE['client'];
                $clientTest = lireClientCookie($email);
                $idClient = $clientTest['id_client'];
                $adresseExist1 = adresseExist($idClient);
                if ($adresseExist1 == 1) {
                    $adresse = afficheAdresse($idClient);
                    $client = lireClientCookie($email);
                } else {
                    $client = lireClientCookie($email);
                }
                include ('Vue/v_commandeAdresse.php');
            }
        } else {
            $erreur = "Vous avez été déconnecté(e), veuillez vous reconnecter pour continuer votre commande";
            include ('Vue/v_commandeIdentifier.php');
        }
        break;
    case "recapitulatif":
        if (isset($_COOKIE['client'])) {
            if (isset($_POST['retour'])){
                $email = $_COOKIE['client'];
                $clientTest = lireClientCookie($email);
                $idClient = $clientTest['id_client'];
                $adresseExist1 = adresseExist($idClient);
                if ($adresseExist1 == 1) {
                    $adresse = afficheAdresse($idClient);
                    $client = lireClientCookie($email);
                } else {
                    $client = lireClientCookie($email);
                }
                include ("Vue/v_commandeAdresse.php");
            }
            $email = $_COOKIE['client'];
            $clientTest = lireClientCookie($email);
            $idClient = $clientTest['id_client'];
            $adresseExist = adresseExist($idClient);
            if ($adresseExist == 1) {
                $adresse = afficheAdresse($idClient);
                $client = lireClientCookie($email);
            } else {
                $client = lireClientCookie($email);
            }
            if (isset($_POST['Frais'])) {
                //$_POST['Frais'] = "colissimo";
                include ('Vue/v_commandeRecapitulatif.php');
            } else {
                $erreur = "Veuillez saisir un moyen de transport";
                $email = $_COOKIE['client'];
                $clientTest = lireClientCookie($email);
                $idClient = $clientTest['id_client'];
                $adresseExist1 = adresseExist($idClient);
                if ($adresseExist1 == 1) {
                    $adresse = afficheAdresse($idClient);
                    $client = lireClientCookie($email);
                } else {
                    $client = lireClientCookie($email);
                }
                include ('Vue/v_commandeTransport.php');
            }
        } else {
            $erreur = "Vous avez été déconnecté(e), veuillez vous reconnecter pour continuer votre commande";
            include ('Vue/v_commandeIdentifier.php');
        }
        break;
    case "paiement":
        if (isset($_COOKIE['client'])) {
            if (isset($_POST['retour']) && empty($_POST['Accept'])) {
                include ("Vue/v_commandeTransport.php");
            }
            if (isset($_POST['Accept'])) {
                include ('Vue/v_commandePaiement.php');
            } else {
                $erreur = "Veuillez accepter les conditions générales de ventes pour continuer";
                include ('Vue/v_commandeRecapitulatif.php');
            }

        } else {
            $erreur = "Vous avez été déconnecté(e), veuillez vous reconnecter pour continuer votre commande";
            include ('Vue/v_commandeIdentifier.php');
        }
        break;
    case "terminerCommande":
        if (isset($_COOKIE['client'])) {
            if (isset($_POST['modePaiement'])) {
                $email = $_COOKIE['client'];
                $clientBdd = lireClientCookie($email);
                $valeur=0;
                foreach ($_SESSION['panier'] as $panier) {
                    $valeur=$valeur+($panier['prix']*$panier['quantite']);
                }
                $client = $clientBdd['id_client'];
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
            } elseif (isset($_POST['retour'])){
                include ("Vue/v_commandeRecapitulatif.php");
            } else {
                $erreur = "Veuillez choisir un mode de paiement";
                include ('Vue/v_commandePaiement.php');
            }
        } else {
            $erreur = "Vous avez été déconnecté(e), veuillez vous reconnecter pour continuer votre commande";
            include ('Vue/v_commandeIdentifier.php');
        }

        break;
    default:
        include('Vue/v_accueil.php');
        break;
}