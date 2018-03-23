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