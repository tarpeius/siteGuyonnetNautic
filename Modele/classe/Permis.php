<?php

/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 09/05/2018
 * Time: 15:36
 */
class Permis
{
    private $id;
    private $type;
    private $mois;
    private $annee;
    private $examenDate;
    private $examenLieu;
    private $timbre;
    private $formation;
    private $pratique;
    private $formulaire;
    private $certificat;

    /**
     * Permis constructor.
     * @param $nom
     * @param $mois
     * @param $annee
     * @param $examenDate
     * @param $examenLieu
     */
//    public function __construct($mois, $annee, $examenDate, $examenLieu, $type)
//    {
//        $this->mois = $mois;
//        $this->annee = $annee;
//        $this->examenDate = $examenDate;
//        $this->examenLieu = $examenLieu;
//        $this->type = $type;
//    }

    public function __construct($param) {
        if (is_array($param)) {
            if (!empty($param['id_typePermis'])) {
                $this->id = $param['id_permis'];
                $this->mois = $param['mois_permis'];
                $this->annee = $param['annee_permis'];
                $this->examenDate = $param['date_examen_permis'];
                $this->examenLieu = $param['lieu_examen_permis'];
                $this->type = $param['id_typePermis'];
            } elseif (!empty($param['prix_timbres_permis'])) {
                $this->id = $param['id_permis'];
                $this->mois = $param['mois_permis'];
                $this->annee = $param['annee_permis'];
                $this->examenDate = $param['date_examen_permis'];
                $this->examenLieu = $param['lieu_examen_permis'];
                $this->timbre = $param['prix_timbres_permis'];
                $this->formation = $param['prix_formation_permis'];
                $this->pratique = $param['pratique_permis'];
                $this->formulaire = $param['formulaire_permis'];
                $this->certificat = $param['certificat_permis'];
            } else {
                $this->mois = $param['mois_permis'];
                $this->annee = $param['annee_permis'];
                $this->examenDate = $param['date_examen_permis'];
                $this->examenLieu = $param['lieu_examen_permis'];
                $this->type = $param['id_typePermis'];
            }

        } else {
            $this->id = $param;
        }
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
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
    public function getMois()
    {
        return $this->mois;
    }

    /**
     * @param mixed $mois
     */
    public function setMois($mois)
    {
        $this->mois = $mois;
    }

    /**
     * @return mixed
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * @param mixed $annee
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    }

    /**
     * @return mixed
     */
    public function getExamenDate()
    {
        return $this->examenDate;
    }

    /**
     * @param mixed $examenDate
     */
    public function setExamenDate($examenDate)
    {
        $this->examenDate = $examenDate;
    }

    /**
     * @return mixed
     */
    public function getExamenLieu()
    {
        return $this->examenLieu;
    }

    /**
     * @param mixed $examenLieu
     */
    public function setExamenLieu($examenLieu)
    {
        $this->examenLieu = $examenLieu;
    }

    /**
     * @return mixed
     */
    public function getTimbre()
    {
        return $this->timbre;
    }

    /**
     * @param mixed $timbre
     */
    public function setTimbre($timbre)
    {
        $this->timbre = $timbre;
    }

    /**
     * @return mixed
     */
    public function getFormation()
    {
        return $this->formation;
    }

    /**
     * @param mixed $formation
     */
    public function setFormation($formation)
    {
        $this->formation = $formation;
    }

    /**
     * @return mixed
     */
    public function getPratique()
    {
        return $this->pratique;
    }

    /**
     * @param mixed $pratique
     */
    public function setPratique($pratique)
    {
        $this->pratique = $pratique;
    }

    /**
     * @return mixed
     */
    public function getFormulaire()
    {
        return $this->formulaire;
    }

    /**
     * @param mixed $formulaire
     */
    public function setFormulaire($formulaire)
    {
        $this->formulaire = $formulaire;
    }

    /**
     * @return mixed
     */
    public function getCertificat()
    {
        return $this->certificat;
    }

    /**
     * @param mixed $certificat
     */
    public function setCertificat($certificat)
    {
        $this->certificat = $certificat;
    }



}