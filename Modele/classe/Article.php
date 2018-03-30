<?php
/**
 * Created by PhpStorm.
 * User: Natoh
 * Date: 28/03/2018
 * Time: 10:45
 */

class Article
{
    /**
     * @var
     */
    private $reference;
    private $nom_article;
    private $prix_article;
    private $qte_article;
    private $resume_article;
    private $desc_article;
    private $poids_article;
    private $motorisation_article;
    private $dimensions_article;
    private $photo_article;
    private $id_marque;
    private $id_tva;

    /**
     * Article constructor.
     * @param $reference
     * @param $nom_article
     * @param $prix_article
     * @param $qte_article
     * @param $resume_article
     * @param $desc_article
     * @param $poids_article
     * @param $motorisation_article
     * @param $dimensions_article
     * @param $photo_article
     * @param $id_marque
     * @param $id_tva
     */
    public function __construct($reference, $nom_article, $prix_article, $qte_article, $resume_article, $desc_article, $poids_article, $motorisation_article, $dimensions_article, $photo_article, $id_marque, $id_tva)
    {
        $this->reference = $reference;
        $this->nom_article = $nom_article;
        $this->prix_article = $prix_article;
        $this->qte_article = $qte_article;
        $this->resume_article = $resume_article;
        $this->desc_article = $desc_article;
        $this->poids_article = $poids_article;
        $this->motorisation_article = $motorisation_article;
        $this->dimensions_article = $dimensions_article;
        $this->photo_article = $photo_article;
        $this->id_marque = $id_marque;
        $this->id_tva = $id_tva;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return mixed
     */
    public function getNomArticle()
    {
        return $this->nom_article;
    }

    /**
     * @param mixed $nom_article
     */
    public function setNomArticle($nom_article)
    {
        $this->nom_article = $nom_article;
    }

    /**
     * @return mixed
     */
    public function getPrixArticle()
    {
        return $this->prix_article;
    }

    /**
     * @param mixed $prix_article
     */
    public function setPrixArticle($prix_article)
    {
        $this->prix_article = $prix_article;
    }

    /**
     * @return mixed
     */
    public function getQteArticle()
    {
        return $this->qte_article;
    }

    /**
     * @param mixed $qte_article
     */
    public function setQteArticle($qte_article)
    {
        $this->qte_article = $qte_article;
    }

    /**
     * @return mixed
     */
    public function getResumeArticle()
    {
        return $this->resume_article;
    }

    /**
     * @param mixed $resume_article
     */
    public function setResumeArticle($resume_article)
    {
        $this->resume_article = $resume_article;
    }

    /**
     * @return mixed
     */
    public function getDescArticle()
    {
        return $this->desc_article;
    }

    /**
     * @param mixed $desc_article
     */
    public function setDescArticle($desc_article)
    {
        $this->desc_article = $desc_article;
    }

    /**
     * @return mixed
     */
    public function getPoidsArticle()
    {
        return $this->poids_article;
    }

    /**
     * @param mixed $poids_article
     */
    public function setPoidsArticle($poids_article)
    {
        $this->poids_article = $poids_article;
    }

    /**
     * @return mixed
     */
    public function getMotorisationArticle()
    {
        return $this->motorisation_article;
    }

    /**
     * @param mixed $motorisation_article
     */
    public function setMotorisationArticle($motorisation_article)
    {
        $this->motorisation_article = $motorisation_article;
    }

    /**
     * @return mixed
     */
    public function getDimensionsArticle()
    {
        return $this->dimensions_article;
    }

    /**
     * @param mixed $dimensions_article
     */
    public function setDimensionsArticle($dimensions_article)
    {
        $this->dimensions_article = $dimensions_article;
    }

    /**
     * @return mixed
     */
    public function getPhotoArticle()
    {
        return $this->photo_article;
    }

    /**
     * @param mixed $photo_article
     */
    public function setPhotoArticle($photo_article)
    {
        $this->photo_article = $photo_article;
    }

    /**
     * @return mixed
     */
    public function getIdMarque()
    {
        return $this->id_marque;
    }

    /**
     * @param mixed $id_marque
     */
    public function setIdMarque($id_marque)
    {
        $this->id_marque = $id_marque;
    }

    /**
     * @return mixed
     */
    public function getIdTva()
    {
        return $this->id_tva;
    }

    /**
     * @param mixed $id_tva
     */
    public function setIdTva($id_tva)
    {
        $this->id_tva = $id_tva;
    }


}