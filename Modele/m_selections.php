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

function emailExist($email)
{
    global $bdd;
    $sql = "SELECT COUNT(*) FROM `client` WHERE email_client=:email";
    $req=$bdd->prepare($sql);
    $req->bindParam(':email', $email);
    $req->execute();
    $result = $req->fetch();
    return $result[0];
}

function adresseExist($idClient)
{
    global $bdd;
    $sql = "SELECT COUNT(*) FROM adresse INNER JOIN client ON adresse.id_client = client.id_client WHERE client.id_client=:idClient";
    $req=$bdd->prepare($sql);
    $req->bindParam(':idClient', $idClient);
    $req->execute();
    $result = $req->fetch();
    return $result[0];
}

function idClient($email, $mdp) {
    global $bdd;
    $sql = "SELECT id_client FROM `client` WHERE email_client=:email AND mdp_client=:mdp";
    $req=$bdd->prepare($sql);
    $req->bindParam(':email', $email);
    $req->bindParam(':mdp', $mdp);
    $req->execute();
    $result = $req->fetch();
    return $result;
}

function idClientSansMdp($email) {
    global $bdd;
    $sql = "SELECT id_client FROM `client` WHERE email_client=:email";
    $req=$bdd->prepare($sql);
    $req->bindParam(':email', $email);
    $req->execute();
    $result = $req->fetch();
    return $result;
}

function lireClient($email, $mdp) {
    global $bdd;
    $sql = "SELECT id_client,nom_client,prenom_client,date_naissance,email_client,adresse_client,cp_client,date_inscription,ville_client,tel_client FROM `client` WHERE email_client=:email AND mdp_client=:mdp";
    $req=$bdd->prepare($sql);
    $req->bindParam(':email', $email);
    $req->bindParam(':mdp', $mdp);
    $req->execute();
    $result = $req->fetch();
    return $result;
}
function lireClientCookie($email) {
    global $bdd;
    $sql = "SELECT id_client,nom_client,prenom_client,date_naissance,email_client,adresse_client,cp_client,date_inscription,ville_client,tel_client FROM `client` WHERE email_client=:email";
    $req=$bdd->prepare($sql);
    $req->bindParam(':email', $email);
    $req->execute();
    $result = $req->fetch();
    return $result;
}

function lireClientId($id) {
    global $bdd;
    $sql = "SELECT id_client,nom_client,prenom_client,date_naissance,email_client,adresse_client,cp_client,date_inscription,ville_client,tel_client FROM `client` WHERE id_client = :id";
    $req=$bdd->prepare($sql);
    $req->bindParam(':id', $id);
    $req->execute();
    $result = $req->fetch();
    return $result;
}
function lireClientEmail($id) {
    global $bdd;
    $sql = "SELECT email_client FROM `client` WHERE id_client = :id";
    $req=$bdd->prepare($sql);
    $req->bindParam(':id', $id);
    $req->execute();
    $result = $req->fetch();
    return $result;
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

function afficherMarque()
{
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * FROM marque";
    $req=$bdd->prepare($query);
    $req->execute();
    $result= $req->fetchAll();
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
    $query = "SELECT logo_marque, nom_marque FROM article
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

function afficheToutPhotoArticle($id){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * FROM photo WHERE id_article=:id ";
    $req=$bdd->prepare($query);
    $req->bindParam(':id', $id);
    $req->execute();
    $result= $req->fetchAll();
    return $result;
}

// <summary>
/// Fonction de selection du nombre de client
/// </summary>
/// <returns>Retourne le nombre de client.</returns>
function selectCountTousArticleUneSousCateg($cat)
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

// <summary>
/// Fonction de selection du nombre de client
/// </summary>
/// <returns>Retourne le nombre de client.</returns>
function selectCountTousArticleUneMarque($marque)
{
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query="SELECT COUNT(article.reference)
                FROM article, marque
                WHERE article.id_marque=marque.id_marque
                AND marque.nom_marque=:marque";
    $req=$bdd->prepare($query);
    $req->bindParam(':marque', $marque);
    $req->execute();
    $result= $req->fetch();
    return $result;
}

/// <summary>
/// Fonction de selection des clients avec une limit pour la pagination
/// </summary>
/// <param name=min>Paramètre de limit minimum.</param>
/// <param name=max>Paramètre de limit maximum.</param>
/// <returns>Retourne le tableau de résultats.</returns>
function afficheArticlePageUneSousCat($cat,$min, $max)
{
    global $bdd;
    $query="SELECT DISTINCT(article.reference), nom_article, categorie.nom_categorie, prix_article, photo_article
                FROM article,  categoriser, categorie 
                WHERE article.reference=categoriser.reference AND categorie.id_categorie=categoriser.id_categorie 
                AND categorie.nom_categorie = :cat
                LIMIT $min , $max ";
    $req=$bdd->prepare($query);
    $req->bindParam(':cat', $cat);
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
function afficheArticlePageUneMarque($marque,$min, $max)
{
    global $bdd;
    $query="SELECT DISTINCT(article.reference), nom_article, prix_article, photo_article
                FROM article, marque 
                WHERE article.id_marque=marque.id_marque
                AND marque.nom_marque = :marque
                LIMIT $min , $max ";
    $req=$bdd->prepare($query);
    $req->bindParam(':marque', $marque);
    $req->execute();
    $result= $req->fetchAll();
    return $result;
}

function afficherIdPaiement($typePaiement){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT id_mdpaiement FROM mode_paiement WHERE type_mdpaiement=:typePaiement";
    $req=$bdd->prepare($query);
    $req->bindParam(':typePaiement', $typePaiement);
    $req->execute();
    $result= $req->fetch();
    return $result;
}
function lastIdCommandeClient($client){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT MAX(id_commande) FROM commande WHERE id_client = :client";
    $req=$bdd->prepare($query);
    $req->bindParam(':client', $client);
    $req->execute();
    $result= $req->fetch();
    return $result;
}

function CommandeClient($client){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT DISTINCT(commande.id_commande),commande.date_commande,commande.valeur_commande,mode_paiement.type_mdpaiement
              FROM commande 
              INNER JOIN ligne_commande ON commande.id_commande = ligne_commande.id_commande
              INNER JOIN mode_paiement ON commande.id_mdpaiement = mode_paiement.id_mdpaiement
              WHERE id_client = :client";
    $req=$bdd->prepare($query);
    $req->bindParam(':client', $client);
    $req->execute();
    $result= $req->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function CommandeClientArticle($client){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT commande.id_commande,article.nom_article,article.photo_article,ligne_commande.qte_lc,article.prix_article,commande.date_commande,commande.valeur_commande,mode_paiement.type_mdpaiement
              FROM commande 
              INNER JOIN ligne_commande ON commande.id_commande = ligne_commande.id_commande
              INNER JOIN article ON ligne_commande.reference = article.reference
              INNER JOIN mode_paiement ON commande.id_mdpaiement = mode_paiement.id_mdpaiement
              WHERE id_client = :client";
    $req=$bdd->prepare($query);
    $req->bindParam(':client', $client);
    $req->execute();
    $result= $req->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function afficheArticleSelection(){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * FROM article WHERE article.reference IN(589,2543,5682)";
    $req=$bdd->prepare($query);
    $req->execute();
    $result= $req->fetchAll();
    return $result;
}

function afficheAdresse($client){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * FROM adresse INNER JOIN client ON adresse.id_client = client.id_client";
    $req=$bdd->prepare($query);
    $req->bindParam(':client', $client);
    $req->execute();
    $result= $req->fetch();
    return $result;
}