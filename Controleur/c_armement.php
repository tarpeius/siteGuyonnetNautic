<?php
$action = "";
if(!empty($_REQUEST['a'])){
    $action = $_REQUEST['a'];
}

switch($action)
{
    case "afficher": // a changer selon besoin
        $categorie = afficherCategorie($_GET['c']);

        if(isset($_GET['marque'])){
            $marque = $_GET['marque'];
            $toutProduit = afficherToutProduitMarque($marque);
        }else if(isset($_GET['sousCateg'])){
            $sousCateg = $_GET['sousCateg'];
            $toutProduit = afficherProduitParCateg($sousCateg);
        }else{
            $toutProduit = afficherToutProduitCategSousCateg('armement','gps','sondeur','accastillage');
        }
        include('Vue/v_armement.php');
        break;
    case "ficheProduit": // a changer selon besoin
        $categorie = afficherCategorie($_GET['c']);
        $idProduit = $_GET['id'];
        $logoMarque = afficherLogoMarqueDeProduit($idProduit);

        $produit = afficherProduit($idProduit);
        $nbProduit = $produit['qte_article'];
        include('Vue/v_ficheProduit.php');
        break;
    default:
        include("Vue/v_accueil.php");
        break;
}
