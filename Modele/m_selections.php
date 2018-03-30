<?php

function isAdmin($pseudo, $mdp)
{
    global $bdd;
    $query = "SELECT COUNT(pseudo_admin) FROM administrateur WHERE pseudo_admin=:pseudo AND pass_admin=:mdp";
    $req=$bdd->prepare($query);
    $req->bindParam(':pseudo', $pseudo);
    $req->bindParam(':mdp', $mdp);
    $req->execute();
    $result = $req->fetch();
    return $result[0];
}

function afficherCategorie($categorie)
{
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * FROM categorie WHERE nom_categorie=:categorie";
    $req=$bdd->prepare($query);
    $req->bindParam(':categorie', $categorie);
    $req->execute();
    $result= $req->fetch();
    return $result;
}

function afficherProduitParCateg($categorie)
{
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * 
              FROM article INNER JOIN categoriser ON article.reference=categoriser.reference
              INNER JOIN categorie ON categoriser.id_categorie=categorie.id_categorie
              WHERE categorie.nom_categorie=:categorie ";
    $req=$bdd->prepare($query);
    $req->bindParam(':categorie', $categorie);
    $req->execute();
    $result= $req->fetchAll();
    return $result;
}

function afficherToutProduitCategSousCateg($cat,$sousCat1,$sousCat2,$sousCat3)
{
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT article.reference, nom_article, categorie.nom_categorie, prix_article, photo_article 
                FROM article, categoriser, categorie
                WHERE article.reference=categoriser.reference
                AND categorie.id_categorie=categoriser.id_categorie
                AND (categorie.nom_categorie=:cat OR categorie.nom_categorie=:sousCat OR categorie.nom_categorie=:sousCat2 OR categorie.nom_categorie=:sousCat3)
                ";
    $req=$bdd->prepare($query);
    $req->bindParam(':cat', $cat);
    $req->bindParam(':sousCat', $sousCat1);
    $req->bindParam(':sousCat2', $sousCat2);
    $req->bindParam(':sousCat3', $sousCat3);
    $req->execute();
    $result= $req->fetchAll();
    return $result;
}

function afficherProduit($id){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * FROM article WHERE reference=:reference";
    $req=$bdd->prepare($query);
    $req->bindParam(':reference', $id);
    $req->execute();
    $result= $req->fetch();
    return $result;
}

function afficherLogoMarqueDeProduit($id){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT logo_marque FROM article
              INNER JOIN marque ON  article.id_marque=marque.id_marque
              WHERE reference=:reference";
    $req=$bdd->prepare($query);
    $req->bindParam(':reference', $id);
    $req->execute();
    $result= $req->fetch();
    return $result;
}

function afficherToutProduitMarque($marque){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * FROM marque INNER JOIN article ON marque.id_marque=article.id_marque WHERE marque.nom_marque = :marque ";
    $req=$bdd->prepare($query);
    $req->bindParam(':marque', $marque);
    $req->execute();
    $result= $req->fetchAll();
    return $result;
}
/// <summary>
/// Fonction de selection des clients avec une limit pour la pagination
/// </summary>
/// <param name=min>Paramètre de limit minimum.</param>
/// <param name=max>Paramètre de limit maximum.</param>
/// <returns>Retourne le tableau de résultats.</returns>
function afficheArticlePageSousCat($cat,$sousCat1,$sousCat2,$sousCat3,$min, $max)
{
    global $bdd;
    $query="SELECT DISTINCT(article.reference), nom_article, categorie.nom_categorie, prix_article, photo_article
                FROM article,  categoriser, categorie 
                WHERE article.reference=categoriser.reference AND categorie.id_categorie=categoriser.id_categorie AND
                categorie.nom_categorie = :cat
                UNION
                SELECT DISTINCT(article.reference), nom_article, categorie.nom_categorie, prix_article, photo_article
                FROM article,  categoriser, categorie 
                WHERE article.reference=categoriser.reference AND categorie.id_categorie=categoriser.id_categorie AND
                categorie.nom_categorie =:sousCat
                UNION 
                SELECT DISTINCT(article.reference), nom_article, categorie.nom_categorie, prix_article, photo_article
                FROM article,  categoriser, categorie 
                WHERE article.reference=categoriser.reference AND categorie.id_categorie=categoriser.id_categorie AND
                categorie.nom_categorie = :sousCat2
                UNION
                SELECT DISTINCT(article.reference), nom_article, categorie.nom_categorie, prix_article, photo_article
                FROM article,  categoriser, categorie 
                WHERE article.reference=categoriser.reference AND categorie.id_categorie=categoriser.id_categorie AND
                categorie.nom_categorie = :sousCat3
                LIMIT $min , $max ";
    $req=$bdd->prepare($query);
    $req->bindParam(':cat', $cat);
    $req->bindParam(':sousCat', $sousCat1);
    $req->bindParam(':sousCat2', $sousCat2);
    $req->bindParam(':sousCat3', $sousCat3);
    $req->execute();
    $result= $req->fetchAll();
    return $result;
}
// <summary>
/// Fonction de selection du nombre de client
/// </summary>
/// <returns>Retourne le nombre de client.</returns>
function selectCountTousArticleSousCateg($cat,$sousCat1,$sousCat2,$sousCat3)
{
    global $bdd;
    $query="SELECT COUNT(article.reference)
                FROM article, categoriser, categorie
                WHERE article.reference=categoriser.reference
                AND categorie.id_categorie=categoriser.id_categorie
                AND (categorie.nom_categorie=:cat OR categorie.nom_categorie=:sousCat OR categorie.nom_categorie=:sousCat2 OR categorie.nom_categorie=:sousCat3)
                ";
    $req=$bdd->prepare($query);
    $req->bindParam(':cat', $cat);
    $req->bindParam(':sousCat', $sousCat1);
    $req->bindParam(':sousCat2', $sousCat2);
    $req->bindParam(':sousCat3', $sousCat3);
    $req->execute();
    $result= $req->fetch();
    return $result;
}
function afficheArticlePage($cat,$min, $max)
{
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * 
              FROM article INNER JOIN categoriser ON article.reference=categoriser.reference
              INNER JOIN categorie ON categoriser.id_categorie=categorie.id_categorie
              WHERE categorie.nom_categorie=:categorie  
              LIMIT $min , $max ";
    $req=$bdd->prepare($query);
    $req->bindParam(':categorie', $cat);
    $req->execute();
    $result= $req->fetchAll();
    return $result;
}
// <summary>
/// Fonction de selection du nombre de client
/// </summary>
/// <returns>Retourne le nombre de client.</returns>
function selectCountTousArticle($cat)
{
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query="SELECT COUNT(article.reference)
                FROM article, categoriser, categorie
                WHERE article.reference=categoriser.reference
                AND categorie.id_categorie=categoriser.id_categorie
                AND categorie.nom_categorie=:cat
                ";
    $req=$bdd->prepare($query);
    $req->bindParam(':cat', $cat);
    $req->execute();
    $result= $req->fetch();
    return $result;
}