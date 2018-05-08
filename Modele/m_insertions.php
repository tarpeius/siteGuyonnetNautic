<?php

function nouveauDevis($nom, $mail, $objet, $message){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $bdd->prepare("INSERT INTO devis (nom_client,mail,objet,message)VALUES(:nom,:mail,:objet,:message)");
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':mail', $mail);
    $stmt->bindParam(':objet', $objet);
    $stmt->bindParam(':message', $message);
    $stmt->execute();
}

function nouveauClient($nom,$prenom,$naissance,$email,$adresse,$cp,$mdp,$ville,$tel){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $bdd->prepare("INSERT INTO client (nom_client,prenom_client,date_naissance,email_client,adresse_client,cp_client,date_inscription,mdp_client,ville_client,tel_client) VALUES(:nom,:prenom,:naissance,:email,:adresse,:cp,:inscription,:mdp,:ville,:tel)");
    $stmt->bindValue(':inscription', dateToday());
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':naissance', $naissance);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':adresse', $adresse);
    $stmt->bindParam(':cp', $cp);
    $stmt->bindParam(':mdp', $mdp);
    $stmt->bindParam(':ville', $ville);
    $stmt->bindParam(':tel', $tel);
    $stmt->execute();
}
function nouvelleCommande($valeur, $client, $paiement){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $bdd->prepare("INSERT INTO commande (date_commande,valeur_commande,id_client,id_mdpaiement)VALUES(:dateCommande,:valeur,:client,:paiement)");
    $stmt->bindValue(':dateCommande', dateToday());
    $stmt->bindParam(':valeur', $valeur);
    $stmt->bindParam(':client', $client);
    $stmt->bindParam(':paiement', $paiement);
    $stmt->execute();
}
function nouvelleLigneCommande($quantite,$commande,$produit) {
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $bdd->prepare("INSERT INTO ligne_commande (qte_lc,id_commande,reference) VALUES(:quantite,:commande,:produit)");
    $stmt->bindParam(':quantite', $quantite);
    $stmt->bindParam(':commande', $commande);
    $stmt->bindParam(':produit', $produit);
    $stmt->execute();
}

function nouvelleAdresse($adresse,$ville,$cp,$client) {
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $bdd->prepare("INSERT INTO adresse (ligne,ville,code_postal,id_client) VALUES(:adresse,:ville,:cp,:client)");
    $stmt->bindParam(':adresse', $adresse);
    $stmt->bindParam(':ville', $ville);
    $stmt->bindParam(':cp', $cp);
    $stmt->bindParam(':client', $client);
    $stmt->execute();
}