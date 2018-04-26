<?php

function modifierClient($nom,$prenom, $dateNaissance, $mail, $adresse, $cp, $inscri, $mdp,  $id){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $bdd->prepare("UPDATE client SET nom_client=:nom, prenom_client=:prenom,  date_naissance=:dateNaissance, email_client=:mail, adresse_client=:adresse, cp_client=:cp, date_inscription=:inscri, mdp_client=:mdp WHERE id_client=:id");
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':dateNaissance', $dateNaissance);
    $stmt->bindParam(':mail', $mail);
    $stmt->bindParam(':adresse', $adresse);
    $stmt->bindParam(':cp', $cp);
    $stmt->bindParam(':inscri', $inscri);
    $stmt->bindParam(':mdp', $mdp);
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