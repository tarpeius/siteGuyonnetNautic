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
        if(isset($_GET['marque'])){
            $nbCount = selectCountTousArticleUneMarque($_GET['marque']);
        }elseif (isset($_GET['sousCateg'])){
            $nbCount = selectCountTousArticleUneSousCateg($_GET['sousCateg']);
        }else {
            $nbCount = selectCountTousArticleSousCateg('armement', 'gps', 'sondeur', 'accastillage');
        }
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
        }
        if(isset($marque)){
            $pageProduit = afficheArticlePageUneMarque($marque,$min, $max);
        } elseif (isset($sousCateg)){
            $pageProduit = afficheArticlePageUneSousCat($sousCateg,$min, $max);
        } else{
            $pageProduit = afficheArticlePageSousCat('armement','gps','sondeur','accastillage',$min, $max);
        }

        include('Vue/v_armement.php');
        break;
    case "ficheProduit": // a changer selon besoin
        $categorie = afficherCategorie($_GET['c']);
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
