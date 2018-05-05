<?php
$action = "";
if(!empty($_REQUEST['a'])){
    $action = $_REQUEST['a'];
}

switch($action) {
    case "afficher": // a changer selon besoin
        include('Vue/v_panier.php');
        break;
    case "supprimerPanier":// lorsque utilisateur clique sur icone trash dans mon panier
        break;
    case "supprimerArticle": // lorsque utilisateur clique sur icone trash dans mon panier
        /*
         * On supprime l'article à l'aide de sa clé envoyée en $GET
         */
        $key = $_GET['key'];
        unset($_SESSION['panier'][$key]);
        include('Vue/v_panier.php');
        break;
    case "supprimerToutArticle":
        unset($_SESSION['panier']);
        include('Vue/v_panier.php');
        break;
    case "ajouterArticle": //lorsque utilisateur clique sur "ajouter au panier"
        $idProduit = $_GET['id'];
        $produit = afficherProduit($idProduit);
        /*
         * On verifie si un panier virtuel a déjà été crée
         * Si oui, on lis le tableau grâce à une boucle en vérifiant si l'article ajouté y existe déjà ou non (grâce à son nom)
         *      Si oui, au lieu de rajouter un meme produit dans le panier, on va augmenter la quantité de cet article de 1.
     *              Si l'article n'a pas été encore ajouté, on l'ajoute avec $result qui nous indique le résultat de la condition précédente
         * Sinon
         *      on créer un nouvel article dans notre panier virtuel
         */
        if (!empty($_SESSION['panier'])) {
            $result=true;
            for ($i=0 ;$i<=count($_SESSION['panier'])-1; $i++) {
                if ($_SESSION['panier'][$i]['nom'] == $produit['nom_article']) {
                    $_SESSION['panier'][$i]['quantite'] += 1;
                    $result = false;
                }
            }
            if ($result == true) {
                $_SESSION['panier'][] = array(
                    "reference" => $produit['reference'],
                    "nom" => $produit['nom_article'],
                    "prix" => $produit['prix_article'],
                    "resume" => $produit['resume_article'],
                    "quantite" => 1,
                    "photo" => $produit['photo_article']
                );
            }
        } else {
            $_SESSION['panier'][] = array(
                "reference" => $produit['reference'],
                "nom" => $produit['nom_article'],
                "prix" => $produit['prix_article'],
                "resume" => $produit['resume_article'],
                "quantite" => 1,
                "photo" => $produit['photo_article']
            );
        }

        /*
         * Fonction JS qui affiche une bulle "article ajouté" lorsque l'utilisateur clique sur 'ajouter au panier'
         */
        echo "<script type='text/javascript'>Materialize.toast('Article ajouté', 4000)</script>";
        include('Vue/v_panier.php');
        break;
    case "modifierQuantite": // dans mon panier, bouton modification quantite produit
        /*
         * (ACTION BOUTON MOINS - ) :
         * Si le panier virtuel existe (n'est pas vide)
         *      on vérifie dans un premier temps l'info du $GET['qte'] ('moins' ou 'plus')
         *          puis on fait une boucle dans le tableau du panier virtuel en s'aidant de la clé du tableau
         *              Si la clé du tableau est égal à la clé envoyé dans le $_GET['key'] correspondant a l'article en question
         *                  alors on diminue de 1 unité la quantité de cet article
         *                  Si la quantité de cet article est de 0 (dernieres conditions)
         *                      alors on supprime l'article du panier virtuel (dernieres conditions)
         * Sinon si :
         * MEME PRINCIPE POUR LE BOUTON PLUS +, avec les dernieres conditions en moins.
         */
        if (!empty($_SESSION['panier'])) {
            $key = $_GET['key'];
            if ($_GET['qte'] === 'moins') {
                for ($i=0 ;$i<=count($_SESSION['panier'])-1; $i++) {
                    if ($i == $key) {
                        $_SESSION['panier'][$key]['quantite'] -= 1;
                        if ($_SESSION['panier'][$key]['quantite'] == 0) {
                            unset($_SESSION['panier'][$key]);
                        }
                    }
                }
            } elseif ($_GET['qte'] === 'plus') {
                for ($i=0 ;$i<=count($_SESSION['panier'])-1; $i++) {
                    if ($i == $key) {
                        $_SESSION['panier'][$key]['quantite'] += 1;
                    }
                }
            }
        }
        include ('Vue/v_panier.php');
        break;
    default:
        include('Vue/v_accueil.php');
        break;
}