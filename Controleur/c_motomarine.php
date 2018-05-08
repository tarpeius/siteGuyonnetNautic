<?php
$action = "";
if(!empty($_REQUEST['a'])){
    $action = $_REQUEST['a'];
}

switch($action)
{
    case "afficher": // a changer selon besoin
        $categorie = afficherCategorie($_GET['c']);
        $nbCount = 0;
        $nbpage= 0;
        // Pagination
        // Recuperation du nombre de pays par zone
        $nbCount = selectCountTousArticle($_GET['c']);
        // Verification si page existe
        if (isset($_GET['page'])){
            $pageActuelle=intval($_GET['page']);
            if ($pageActuelle>$nbCount[0]){
                $pageActuelle=$nbCount[0];
            }
        }else{
            $pageActuelle=1;
        }
        $max = 15;
        $min = 0;
        $min = ($pageActuelle - 1) * $max;
        $nbpage = ceil(($nbCount[0]) / $max);
        if(isset($_GET['marque'])){
            $marque = $_GET['marque'];
            $pageProduit = afficherToutProduitMarque($marque);
        }else{
            $pageProduit = afficheArticlePage($_GET['c'],$min, $max);
        }
        include('Vue/v_motomarine.php');
        break;
    case "ficheProduit": // a changer selon besoin
        $categorie = afficherCategorie($_GET['c']);
        $nomCateg = ucfirst($_GET['c']);
        $idProduit = $_GET['id'];
        $logoMarque = afficherLogoMarqueDeProduit($idProduit);
        $produit = afficherProduit($idProduit);
        $photoProduit = afficheToutPhotoArticle($idProduit);
        $nbProduit = $produit['qte_article'];
        include('Vue/v_ficheProduit.php');
        break;
    default:
        include("Vue/v_accueil.php");
        break;
}
