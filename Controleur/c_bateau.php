<?php
$action = "";
if(!empty($_REQUEST['a'])){
    $action = $_REQUEST['a'];
}

switch($action)
{
    case "modifAfficher":
        var_dump($_GET);
        break;

    case "afficher": // a changer selon besoin
        $allMarque = afficherMarque();
        $categorie = afficherCategorie($_GET['c']);
        $nbCount = 0;
        $nbpage= 0;
        // Pagination
        // Recuperation du nombre de pays par zone
        if(isset($_GET['marque'])){
            $nbCount = selectCountTousArticleUneMarque($_GET['marque']);
        }elseif (isset($_GET['sousCateg'])){
            $nbCount = selectCountTousArticleUneSousCateg($_GET['sousCateg']);
        }else{
            $nbCount = selectCountTousArticleSousCateg('Bateau','rigide','pneumatique','barque');
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
            if ($_GET['marque'] == "Trier par marque"){
                $sousCateg = $_GET['sousCateg'];
                $pageProduit = afficherProduitParCateg($sousCateg);
            } else {
                $marque = $_GET['marque'];
                $pageProduit = afficherToutProduitMarque($marque);
            }

        }else if(isset($_GET['sousCateg'])){
            $sousCateg = $_GET['sousCateg'];
            $pageProduit = afficherProduitParCateg($sousCateg);
        }
        if(isset($marque)){
            $pageProduit = afficheArticlePageUneMarque($marque,$min, $max);
        } elseif (isset($sousCateg)){
            $pageProduit = afficheArticlePageUneSousCat($sousCateg,$min, $max);
        } else{
            $pageProduit = afficheArticlePageSousCat('Bateau','rigide','pneumatique','barque',$min, $max);
        }
        include('Vue/v_bateau.php');
        break;

    case "modifAfficher":
        include ('../Modele/m_connexion.php');
        include ('../Modele/m_selections.php');
        include ('../Modele/m_modifications.php');
        $marque = $_POST['marque'];
        $pageProduit = afficherToutProduitMarque($marque);
        echo json_encode($pageProduit);
        break;

    case "ficheProduit": // a changer selon besoin
        $nomCateg = $_GET['c'];
        $categorie = afficherCategorie($_GET['c']);
        $idProduit = $_GET['id'];
        $logoMarque = afficherLogoMarqueDeProduit($idProduit);
        $produit = afficherProduit($idProduit);
        $photoProduit = afficheToutPhotoArticle($idProduit);
        var_dump($idProduit);
        var_dump($photoProduit);
        $nbProduit = $produit['qte_article'];
        include('Vue/v_ficheProduit.php');
        break;

    default:
        include("Vue/v_accueil.php");
        break;
}
