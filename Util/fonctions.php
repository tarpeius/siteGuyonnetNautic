<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlentities($data);
    $data = strip_tags($data);
    return $data;
}

function checkClientMail_if_exists($email)
{
    global $bdd;
    $stmt = $bdd->prepare("SELECT count(*)FROM `client`WHERE email_client = :email");
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    $result = (int)$stmt->fetchColumn();
    return $result;
}
function dateToday(){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $bdd->prepare("SELECT NOW()");
    $stmt->execute();
    $result = $stmt->fetchColumn();
    return $result;
}


