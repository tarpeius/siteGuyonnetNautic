<?php

?>
    <H1 class="header center light-blue-text text-darken-4">
        Suivi commande
    </H1>
    <?php
    if (empty($article)) {
        echo "<div class='container'>
                    <div class=\"row\" id=\"alert_box\">
                        <div class=\"col s12 m12\">
                            <div id='messageErreur' class=\" orange darken-1\">
                                <div class=\"row\">
                                    <div class=\"col s12 m10\">
                                        <div class=\"card-content white-text\">
                                            <p class=\"center-align\">$erreur</p>
                                        </div>
                                    </div>
                                    <div class=\"col s12 m2\">
                                        <i class=\"fa fa-times icon_style\" id=\"alert_close\" aria-hidden=\"true\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
    }
     if (!empty($reussi)) {
        echo"
        <div class='container'>
            <div class=\"row\" id=\"alert_box\">
                <div class=\"col s12 m12\">
                    <div id='messageErreur' class=\" green darken-1\">
                        <div class=\"row\">
                            <div class=\"col s12 m12\">
                                <div class=\"card-content white-text\">
                                    <p class=\"center-align\">".$reussi."</p>
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
<div class="container">
    <div id="compteClient" class="row">
        <div class="col s12 m4 l3">
            <ul class="">
                <li class="active">
                    <a href="index.php?c=compteClient&a=afficher">Compte client</a>
                </li>
                <li>
                    <a href="index.php?c=compteClient&a=suiviCommande">Suivi commande</a>
                </li>
                <li>
                    <a href="index.php?c=panier&a=afficher">Panier</a>
                </li>
            </ul>
        </div>
        <div class="col s12 m4 l6">
            <h3 class="center-align">Historique</h3>
        </div>
    </div>
    <div class="col s12 m8 l9">
        <?php
        if (!empty($article)) {

            foreach ($article as $articles) {
        ?>
        <div class="row">
            <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header">
                        <i class="material-icons">list</i><span>Commande n° <?php echo $articles['id_commande']; ?></span>
                    </div>
                    <div class="collapsible-body">
<!--                        <div class="card-panel">-->
                            <table>
                                <tbody>
                                    <tr class="light-blue darken-4">
                                        <td class="white-text"></td>
                                        <td class="white-text">Designation produits</td>
                                        <td class="white-text">Quantite</td>
                                        <td class="white-text">Prix total</td>
                                        <td class="white-text">Date</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img id="photoPanier" src="Util/img/<?php echo $articles['photo_article'] ?>">
                                        </td>
                                        <td>
                                            <?php echo $articles['nom_article']; ?>
                                        </td>
                                        <td>
                                            <?php echo $articles['qte_lc']; ?>
                                        </td>
                                        <td>
                                            <?php echo $articles['prix_article'] * $articles['qte_lc']; ?>€
                                        </td>
                                        <td>
                                            <?php echo $articles['date_commande']; ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
<!--                        </div>-->
                    </div>
                </li>
            </ul>
        </div>
            <?php
            }
        }
        ?>

            </div>
        </div>
    </div>
</div>