<?php

/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 09/05/2018
 * Time: 14:56
 */
class Permis
{
    private $id;

    /**
     * Adresse constructor.
     * @param $nom
     *
     */
    public function __construct($nom,$prenom,$email)
    {
        $this->nom = $nom;
    }
}