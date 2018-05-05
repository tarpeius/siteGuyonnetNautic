<form method="POST" action="index.php?c=commande&a=paiement">
    <div class="commandeEtape">
        <ol>
            <li class="testLi">
                <span>1. S'identifier</span>
            </li>
            <li class="testLi">
                <span>2. Adresse</span>
            </li>
            <li class="testLi">
                <span>3. Transport</span>
            </li >
            <li class="testLi">
                <span>4. Récapitulatif</span>
            </li >
            <li class="testLi">
                <span>5. Paiement</span>
            </li>
        </ol>
    </div>
    <div>
        <H3 class="header center light-blue-text text-darken-4">Recapitulatif</H3>
    </div>
    <?php
    if(!empty($erreur)) {
        echo "
                <div class='container'>
                    <div class=\"row\" id=\"alert_box\">
                        <div class=\"col s12 m12\">
                            <div id='messageErreur' class=\" red darken-1\">
                                <div class=\"row\">
                                    <div class=\"col s12 m10\">
                                        <div class=\"card-content white-text\">
                                            <p class=\"center-align\">" . $erreur . "</p>
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
    ?>
    <div class="divider margin"></div>
<div class="container">
    <div class="col s12 m8 l9">
        <div class="row">
            <div class="card-panel">
                <table>
                    <tbody>
                    <tr class="sectionPanier">
                        <td class="white-text"></td>
                        <td class="white-text">Designation produits</td>
                        <td class="white-text">Quantite</td>
                        <td class="white-text">Prix total</td>
                    </tr>
                    <?php
                    if (isset($_SESSION['panier'])) {
                        $paniers = $_SESSION['panier'];
                        foreach ($paniers as $panier) {
                            ?>
                            <tr>
                                <td>
                                    <img id="photoPanier" src="Util/img/<?php echo $panier['photo'] ?>"
                                </td>
                                <td>
                                    <h5><?php echo $panier['nom'] ?></h5>
                                    <span><?php echo $panier['resume'] ?></span>
                                </td>
                                <td>
                                    <?php echo $panier['quantite'] ?>
                                </td>
                                <td>
                                    <?php echo $panier['prix']*$panier['quantite'] ?> €
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
    <div class="row">
        <div class="col s12 m4 l3">
            <?php
                if (!empty($_SESSION['panier'])) {
                    $nom = $_SESSION['client']['nom_client'];
                    $prenom = $_SESSION['client']['prenom_client'];
                    $adresse = $_SESSION['client']['adresse_client'];
                    $cp = $_SESSION['client']['cp_client'];
                    $ville = $_SESSION['client']['ville_client'];
                    echo "<p id=\"sizeRecapTitle\">Mon adresse de facturation</p>
                            <p class=\"sizeRecap\">$nom ' '$prenom</p>
                            <p class=\"sizeRecap\">$adresse</p>
                            <p class=\"sizeRecap\">$cp' ' $ville</p>";
                    }
            ?>

        </div>
        <div class="col s12 m4 l3">
            <p id="sizeRecapTitle">Mon adresse de livraison</p>
            <p>Retrait au magasin</p>
        </div>
        <div class="col s12 m4 l6">
            <?php
                $result=0;
                if (!empty($_SESSION['panier'])) {
                    foreach ($_SESSION['panier'] as $panier) {
                        $result=$result+($panier['prix']*$panier['quantite']);
                    }
                    $tva = $result *0.2;
                    echo "<p class=\"sizeRecap\">Montant total TTC de vos produits > $result €</p>
                        <p class=\"sizeRecap\">Montant	TTC des frais de livraison > 0.0 €</p>
                        <p class=\"sizeRecap\">dont TVA > <?php echo $tva ?> €</p>
                        <p id=\"sizeRecapTitle\">Montant total TTC de votre commande > <?php echo $result ?> €</p>";
                }
            ?>
        </div>
    </div>
    <div class="divider margin"></div>
    <div class="row">
        <input type="checkbox" name="Accept" id="retrait" />
        <label for="retrait">J'accepte les conditions générales de vente et conditions du droit de rétractation</label>
        <div class="col s9 offset-s9">
            <button type="submit" class="waves-effect waves-light btn-large" name="action">Choisir moyen de paiement
                <i class="material-icons right">credit_card</i>
            </button>
        </div>
    </div>
</div>
</form>