<?php

/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 28/03/2018
 * Time: 09:41
 */
class Connexion
{
    private $id;
    private $email;
    private $mdp;
    private $confirm;
    private $nom;
    private $prenom;
    private $naissance;
    private $adresse;
    private $cp;
    private $ville;
    private $telephone;

    /**
     * Connexion constructor.
     * @param $email
     * @param $mdp
     * @param $confirm
     * @param $nom
     * @param $prenom
     * @param $naissance
     * @param $adresse
     * @param $cp
     * @param $ville
     * @param $telephone
     */
    public function __construct($values)
    {
        $this->setNom($values['nom']);
        $this->setPrenom($values['prenom']);
        $this->setEmail($values['email']);
        $this->setMdp($values['mdp']);
        $this->setNaissance($values['naissance']);
        $this->setAdresse($values['adresse']);
        $this->setConfirm($values['confirm']);
        $this->setCp($values['cp']);
        $this->setVille($values['ville']);
        $this->setTelephone($values['telephone']);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @param mixed $mdp
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

    /**
     * @return mixed
     */
    public function getConfirm()
    {
        return $this->confirm;
    }

    /**
     * @param mixed $confirm
     */
    public function setConfirm($confirm)
    {
        $this->confirm = $confirm;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getNaissance()
    {
        return $this->naissance;
    }

    /**
     * @param mixed $naissance
     */
    public function setNaissance($naissance)
    {
        $this->naissance = $naissance;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * @param mixed $cp
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

}