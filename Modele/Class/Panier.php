<?php

/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 27/04/2018
 * Time: 15:31
 */
class Panier
{
    private $id;

    private $articleCollection;

    public function __construct()
    {
        $this->articleCollection = [];
    }


    public function addArticle($article)
    {

        if (in_array($article, $this->articleCollection, true)) {
            return false;
        }

        $this->articleCollection[] = $article;
        return true;
    }
    public function removeArticle($article) {

        $key = array_search($article, $this->articleCollection, true);
        if ($key === false) {
            return false;
        }

        unset($this->articleCollection[$key]);
        return true;
    }


    public function getArticleCollection() {

        return $this->articleCollection;
    }
}