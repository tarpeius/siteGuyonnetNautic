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
        $nbCount = selectCountTousArticleSousCateg('Bateau','rigide','pneumatique','barque');
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
        }else if(isset($_GET['sousCateg'])){
            $sousCateg = $_GET['sousCateg'];
            $pageProduit = afficherProduitParCateg($sousCateg);
        }else{
            $pageProduit = afficheArticlePageSousCat('Bateau','rigide','pneumatique','barque',$min, $max);
        }


        include('Vue/v_bateau.php');
        break;
    case "ficheProduit": // a changer selon besoin
        $nomCateg = $_GET['c'];
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
