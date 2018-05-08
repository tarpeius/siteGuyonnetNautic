
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
            <li class="light-blue-text text-darken-4 testLi">
                <span><b>4. Récapitulatif</b></span>
            </li >
            <li class="testLi">
                <span>5. Paiement</span>
            </li>
        </ol>
    </div>
    <div>
        <H3 class="titreCommande header center light-blue-text text-darken-4"><b>Recapitulatif</b></H3>
    </div>
    <?php
    if(!empty($erreur)) {
        echo "
                <div class='container'>
                    <div class=\"row\" id=\"alert_box\">
                        <div class=\"col s12 m12\">
                            <div id='messageErreur' class=\" red darken-1\">
                                <div class=\"row\">
                                    <div class=\"col s12 m12\">
                                        <div class=\"card-content white-text\">
                                            <p class=\"center-align\">" . $erreur . "</p>
                                        </div>
                                    </div>                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
    }
    ?>
    <div class="divider margin"></div>
<div class="container conteneurCommandeRecapitulatif">
    <div class="col s12 m8 l9">
        <div class="row">
            <div class="card-panel">
                <table>
                    <tbody>
                    <?php
                    if (isset($_SESSION['panier'])) {
                        $paniers = $_SESSION['panier'];
                        foreach ($paniers as $panier) {
                            ?>
                    <tr class="light-blue darken-4">
                        <td class="white-text"></td>
                        <td class="white-text titreCommande">Designation produits</td>
                        <td class="white-text titreCommande">Qté</td>
                        <td class="white-text titreCommande">total</td>
                    </tr>
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
                if (!empty($_SESSION['panier']) && !empty($adresse) && !empty($client)) {
                    $nom = strtoupper($client['nom_client']);
                    $prenom = ucfirst($client['prenom_client']);
                    $ligne = $adresse['ligne'];
                    $cp = $adresse['code_postal'];
                    $ville = $adresse['ville'];
                    echo "<p id=\"sizeRecapTitle\">Mon adresse de facturation</p>
                            <p class=\"sizeRecap\">$nom $prenom</p>
                            <p class=\"sizeRecap\">$ligne</p>
                            <p class=\"sizeRecap\">$cp $ville</p>";
                } elseif (!empty($_SESSION['panier']) && !empty($client) && empty($adresse)) {
                    $nom = $client['nom_client'];
                    $prenom = $client['prenom_client'];
                    $ligne = $client['adresse_client'];
                    $cp = $client['cp_client'];
                    $ville = $client['ville_client'];
                    echo "<p id=\"sizeRecapTitle\">Mon adresse de facturation</p>
                            <p class=\"sizeRecap\">$nom $prenom</p>
                            <p class=\"sizeRecap\">$ligne</p>
                            <p class=\"sizeRecap\">$cp $ville</p>";
                }
            ?>

        </div>
        <div class="col s12 m4 l3">
            <?php
            if (!empty($_POST['Frais'])) {
                echo "<p id=\"sizeRecapTitle\">Mon adresse de livraison</p>
                            <p class=\"sizeRecap\">$ligne</p>
                            <p class=\"sizeRecap\">$cp $ville</p>";
            } else {
                echo "<p id=\"sizeRecapTitle\">Mon adresse de livraison</p>
                <p class=\"sizeRecap\">Retrait au magasin</p>";
            }
            ?>
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
                        <p class=\"sizeRecap\">dont TVA > $tva €</p>
                        <p id=\"sizeRecapTitle\">Montant total TTC de votre commande > $result €</p>";
                }
            ?>
        </div>
    </div>
    <div class="divider margin"></div>
    <div class="section">
        <div class="row">
            <input type="checkbox" name="Accept" id="retrait" />
            <label for="retrait">J'accepte les conditions générales de vente et conditions du droit de rétractation</label>
        </div>
    </div>
    <div class="section">
        <div class="row">
            <div class="col s6 left-align">
                <button class="waves-effect waves-light btn-large" name="retour">
                    <a class="white-text" href="">Retour</a>
                </button>
            </div>
            <div class="col s6 right-align">
                <button type="submit" class="waves-effect waves-light btn-large" name="action">Suivant
                </button>
            </div>
        </div>
    </div>
</div>
</form>