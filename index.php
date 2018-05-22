<?php
    //require_once 'Modele/Class/Panier.php';
	// session / error / include
	error_reporting(E_ALL);
	// affiche les erreurs a enlever en prod!!!! 
	ini_set('display_errors', 1);
	// k�c�c� ? 
	ob_start();
	session_start();
	date_default_timezone_set('Europe/Paris');
    if (empty($_COOKIE['client'])) {
        if (!empty($_SESSION['client'])) {
            $cookieEmail = $_SESSION['client'];
            setcookie('client', $cookieEmail, time() + 3600, null, null, false, true);
        }
    }

	include("Modele/m_connexion.php");
	include("Modele/m_selections.php");
	include("Modele/m_suppressions.php");
	include("Modele/m_modifications.php");
	include("Modele/m_insertions.php");
	include("Util/fonctions.php");
	include("Vue/structure/v_header.php");
	include("Vue/structure/v_bandeau.php");
	
	if((!isset($_REQUEST['c']))||(!isset($_REQUEST['a']))) { // controleur -- action
        $uc = 'accueil';
    } else {
        $uc = $_REQUEST['c'];
    }

	switch($uc)
	{
	case 'accueil':
	   include("Controleur/c_accueil.php");
	   break;
    case 'bateau':
        include("Controleur/c_bateau.php");
        break;
    case 'remorque':
        include ("Controleur/c_remorque.php");
        break;
    case 'armement':
        include ("Controleur/c_armement.php");
        break;
    case 'moteur':
        include ("Controleur/c_moteur.php");
        break;
    case 'motomarine':
        include ("Controleur/c_motomarine.php");
        break;
    case 'permis':
        include ("Controleur/c_permis.php");
        break;
    case 'connexion':
        include ("Controleur/c_connexion.php");
        break;
    case 'inscription':
        include ("Controleur/c_inscription.php");
        break;
    case 'contact':
        include ("Controleur/c_contact.php");
        break;
    case 'compteClient':
        include ("Controleur/c_compteClient.php");
        break;
    case 'panier':
        include ("Controleur/c_panier.php");
        break;
    case 'commande':
        include ("Controleur/c_commande.php");
        break;
	default:
	   include("Vue/Structure/v_nopage.php");
	   break;
    }
    include("Vue/Structure/v_footer.php") ;
	ob_end_flush();
