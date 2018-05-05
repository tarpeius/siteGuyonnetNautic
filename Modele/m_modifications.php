<?php

function modifierClient($nom, $prenom, $mail, $adresse, $cp, $id){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $bdd->prepare("UPDATE client SET nom_client=:nom, prenom_client=:prenom, email_client=:mail, adresse_client=:adresse, cp_client=:cp WHERE id_client=:id");
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':mail', $mail);
    $stmt->bindParam(':adresse', $adresse);
    $stmt->bindParam(':cp', $cp);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}

function modifierMdpClient($id,$mdp){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $bdd->prepare("UPDATE client SET mdp_client=:mdp WHERE id_client=:id");
    $stmt->bindParam(':mdp', $mdp);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}