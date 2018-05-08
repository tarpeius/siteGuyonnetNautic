
    <H1 class="header center light-blue-text text-darken-4">
        Suivi commande
    </H1>
    <?php
    if (empty($commande)) {
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
        <div class="row">
            <h4>Commande</h4>
            <div class="card-panel">
                <table>
                    <tbody>
                    <?php
                    if (!empty($commande)) {

                        foreach ($commande as $commandes) {
                            ?>
                        <tr class="sectionPanier">
                            <td class="white-text">N° commande</td>
                            <td class="white-text">Date commande</td>
                            <td class="white-text">Mode de paiement</td>
                            <td class="white-text">Valeur total</td>
                        </tr>
                        <tr>
                            <td>
                                <span><?php echo $commandes['id_commande']; ?></span>
                            </td>
                            <td>
                                <span><?php echo $commandes['date_commande']; ?></span>
                            </td>
                            <td>
                                <span><?php echo $commandes['type_mdpaiement']; ?></span>
                            </td>
                            <td>
                                <span><?php echo $commandes['valeur_commande'] ?> €</span>
                            </td>
                        </tr>
                        <?php
                        }
                    }
                ?>
                    </tbody>
                </table>
            </div>
            <h4>Details</h4>
            <div class="card-panel">
                <table>
                    <tbody>
                    <?php
                        if (!empty($article)) {

                            foreach ($article as $articles) {
                                ?>
                                <tr class="sectionPanier">
                                    <td class="white-text">N° commande</td>
                                    <td class="white-text"></td>
                                    <td class="white-text">Designation produits</td>
                                    <td class="white-text">Quantite</td>
                                    <td class="white-text">Prix total</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span><?php echo $articles['id_commande']; ?></span>
                                    </td>
                                    <td>
                                        <img id="photoPanier" src="Util/img/<?php echo $articles['photo_article'] ?>"
                                    </td>
                                    <td>
                                        <span><?php echo $articles['nom_article']; ?></span>
                                    </td>
                                    <td>
                                        <span><?php echo $articles['qte_lc']; ?></span>
                                    </td>
                                    <td>
                                        <span><?php echo $articles['prix_article'] * $articles['qte_lc'] ?> €</span>
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
        </div>
    </div>
</div>