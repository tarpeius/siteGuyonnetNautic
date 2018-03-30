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

    $params = array (
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':naissance' => $naissance,
        ':email' => $email,
        ':adresse' => $adresse,
        ':cp' => $cp,
        ':inscription' => dateToday(),
        ':mdp' => $mdp,
        ':ville' => $ville,
        ':tel' => $tel,
    );
    $stmt->execute($params);
}