<?php

function isAdmin($email, $mdp)
{
    global $bdd;
    $sql = "SELECT COUNT(*) FROM `client` WHERE email_client=:email AND mdp_client=:mdp";
    $req=$bdd->prepare($sql);
    $req->bindParam(':email', $email);
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
