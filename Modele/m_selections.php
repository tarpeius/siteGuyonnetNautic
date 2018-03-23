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