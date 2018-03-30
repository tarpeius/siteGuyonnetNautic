<?php

/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 28/03/2018
 * Time: 10:07
 */
class ConnexionManager
{
    private $db;

    public function __construct($mode='prod')
    {
        if ($mode == 'debug'){
            $this->db = New PDO('mysql:host=localhost;dbname=guyonnetnautic;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }elseif ($mode == 'prod'){
            $this->db = New PDO('mysql:host=localhost;dbname=guyonnetnautic;charset=utf8','root','');
        }
    }

    public function add(Connexion &$client)
    {
        $sql = "INSERT INTO client (nom_client,prenom_client,date_naissance,email_client,adresse_client,cp_client,date_inscription,mdp_client,ville_client,tel_client) VALUES (:nom,:prenom,:naissance,:email,:adresse,:cp,:inscription,:mdp,:ville,:tel)";
        $req = $this->db->prepare($sql);
        $req->bindValue('nom',$client->getNom(), PDO::PARAM_STR);
        $req->bindValue('prenom',$client->getPrenom(), PDO::PARAM_INT);
        $req->bindValue('naissance',$client->getNaissance(), PDO::PARAM_INT);
        $req->bindValue('email',$client->getEmail(), PDO::PARAM_INT);
        $req->bindValue('adresse',$client->getAdresse(), PDO::PARAM_INT);
        $req->bindValue('cp',$client->getCp(), PDO::PARAM_INT);
        $req->bindValue('inscription',$client->getInscription(), PDO::PARAM_INT);
        $req->bindValue('mdp',$client->getMdp(), PDO::PARAM_INT);
        $req->bindValue('ville',$client->getVille(), PDO::PARAM_INT);
        $req->bindValue('tel',$client->getTelephone(), PDO::PARAM_INT);
        $req->execute();
        $id = $this->db->lastInsertId();
        $client->setId($id);
    }

}