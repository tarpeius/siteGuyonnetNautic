<?php
//     var_dump($_SESSION['client']);
//     echo $_COOKIE["client"];
?>
    <H1 class="header center light-blue-text text-darken-4">Panier</H1>
    <?php
    if (empty($_SESSION['panier'])) {
        echo "<div class='container'>
                    <div class=\"row\" id=\"alert_box\">
                        <div class=\"col s12 m12\">
                            <div id='messageErreur' class=\"orange darken-1\">
                                <div class=\"row\">
                                    <div class=\"col s12 m12\">
                                        <div class=\"card-content white-text\">
                                            <p class=\"center-align\">Votre panier est vide</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
    }
    ?>
    <div class="divider"></div>
<div class="container conteneurCommande">
<div id="compteClient" class="row">
        <div class="col s12 m4 l3">
            <div class="collection">
                <?php
                    if (!empty($_COOKIE['client'])) {
                        echo "<a class=\"collection-item blue-text\" href=\"index.php?c=compteClient&a=afficher\">Compte client</a>";
                    }
                ?>
                <a class="collection-item blue-text" href="index.php?c=compteClient&a=suiviCommande">Suivi commande</a>
                <a class="collection-item blue active" href="index.php?c=panier&a=afficher">Panier</a>
            </div>
        </div>
    <div class="col s12 m8 l6 center-align">
            <h3 class="">Contenu de mon panier</h3>
    </div>
    <div class="col s12 m8 l12 center-align">
        <div class="row">
            <div class="card-panel">
                <table>
                    <tbody>
                        <tr class="light-blue darken-4">
                            <td></td>
                            <td class="white-text titreCommande">Designation produits</td>
                            <td class="white-text titreCommande">Qté</td>
                            <td class="white-text titreCommande">total</td>
                            <td>
<!--                                <a class="white-text titreCommande" href="index.php?c=panier&a=supprimerToutArticle"><i class="material-icons">delete</i></a>-->
                            </td>
                        </tr>
                            <?php
                                if (isset($_SESSION['panier'])) {
                                    $paniers = $_SESSION['panier'];
                                    foreach ($paniers as $key => $panier) {
                                        ?>
                                        <tr>
                                            <td>
                                                <img id="photoPanier" src="Util/img/<?php echo $panier['photo'] ?>"
                                            </td>
                                            <td class="sizeArticlePanier">
                                                <h5><?php echo $panier['nom'] ?></h5>
                                                <span><?php echo $panier['resume'] ?></span>
                                            </td>
                                            <td>
                                                <a href="index.php?c=panier&a=modifierQuantite&qte=moins&key=<?php echo $key ?>"><i class="tiny material-icons">remove</i></a>
                                                <?php echo $panier['quantite'] ?>
                                                <a href="index.php?c=panier&a=modifierQuantite&qte=plus&key=<?php echo $key ?>"><i class="tiny material-icons">add</i></a>
                                            </td>
                                            <td>
                                                <?php echo $panier['prix']*$panier['quantite'] ?> €
                                            </td>
                                            <td>
                                                <a class="grey-text" href="index.php?c=panier&a=supprimerArticle&key=<?php echo $key ?>"><i class="material-icons">delete</i></a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php
        if (!empty($_SESSION['panier'])) {
            echo "<div class=\"col s9 offset-s9\">
                        <a class='white-text' href='index.php?c=commande&a=afficher'>
                            <button class=\"waves-effect waves-light btn-large\" name=\"action\">Passer ma commande
                                <i class=\"material-icons right\">arrow_forward</i>
                            </button>
                        </a>
                </div>";
        }
?>

</div>
</div>