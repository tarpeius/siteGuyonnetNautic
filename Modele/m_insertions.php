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