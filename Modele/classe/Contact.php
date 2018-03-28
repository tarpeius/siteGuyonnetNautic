<?php
/**
 * Created by PhpStorm.
 * User: Natoh
 * Date: 28/03/2018
 * Time: 11:00
 */

class Contact
{
    private $id_devis;
    private $nom_client;
    private $mail;
    private $objet;
    private $message;

    /**
     * Contact constructor.
     * @param $id_devis
     * @param $nom_client
     * @param $mail
     * @param $objet
     * @param $message
     */
    public function __construct($id_devis, $nom_client, $mail, $objet, $message)
    {
        $this->id_devis = $id_devis;
        $this->nom_client = $nom_client;
        $this->mail = $mail;
        $this->objet = $objet;
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getIdDevis()
    {
        return $this->id_devis;
    }

    /**
     * @param mixed $id_devis
     */
    public function setIdDevis($id_devis)
    {
        $this->id_devis = $id_devis;
    }

    /**
     * @return mixed
     */
    public function getNomClient()
    {
        return $this->nom_client;
    }

    /**
     * @param mixed $nom_client
     */
    public function setNomClient($nom_client)
    {
        $this->nom_client = $nom_client;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * @param mixed $objet
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

}