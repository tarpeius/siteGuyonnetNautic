
<form method="POST" action="index.php?c=commande&a=recapitulatif">
    <div class="commandeEtape">
        <ol>
            <li class="testLi">
                <span>1. S'identifier</span>
            </li>
            <li class="testLi">
                <span>2. Adresse</span>
            </li>
            <li class="testLi light-blue-text text-darken-4">
                <span><b>3. Transport</b></span>
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
        <H3 class="titreCommande header center light-blue-text text-darken-4"><b>Transport</b></H3>
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
    <div class="container conteneurCommandeTransport">
        <div class="col s12 m8 l9">
                <div class="row">
                    <div class="col m12 s12">
                        <div class="card-panel section">
                            <div class="card-title"><h5><strong>Informations complémentaires</strong></h5></div>
                            <div class="divider"></div>
                            <p> Seul le retrait au magasin est disponible pour le moment.<br>
                                Merci de votre compréhension.
                            </p>
                        </div>
                    </div>
                </div>
            <h5>Choisissez une option de livraison</h5>
            <div class="card-panel">
                <table>
                    <tbody>
<!--                     GUYONNET NAUTIC-->
                    <tr>
                        <td class="grey lighten-4">
                            <input class="with-gap" name="Frais" type="radio" id="retrait" value="" checked/>
                            <label for="retrait"></label>
                        </td>
                        <td class="grey lighten-4">
                            <img id="photoPanier" src="Util/img/Copie de GUYONNET-logo.png">
                        </td>
                        <td class="grey lighten-4">
                            <p><b>Boutique Guyonnet Nautic</b></p>
                            <p>Retrait gratuit au magasin</p>
                        </td>
                        <td class="grey lighten-4">
                            <p>Gratuit !</p>
                        </td>
                    </tr>
<!--                     COLISSIMO -->
                    <tr>
                        <td>
                            <input class="with-gap" name="Frais" type="radio" id="colissimo" value="colissimo" disabled="disabled" />
                            <label for="colissimo"></label>
                        </td>
                        <td>
                            <img id="photoPanier" src="Util/img/47.jpg">
                        </td>
                        <td>
                            <p><b>Colissimo Suivi</b></p>
                            <p>Colis livré sous 48h à 72h avec ou sans signature selon valeur de l'article.</p>
                        </td>
                        <td>
                            <p>12.00 € TTC</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="grey lighten-4">
                            <input class="with-gap" name="Frais" type="radio" id="chronopost" value="chronopost" disabled="disabled" />
                            <label for="chronopost"></label>
                        </td>
                        <td class="grey lighten-4">
                            <img id="photoPanier" src="Util/img/50.jpg">
                        </td>
                        <td class="grey lighten-4">
                            <p><b>Chronopost - Livraison express en point relais</b></p>
                            <p>Colis livré le lendemain avant 13 h dans le relais Pickup de votre choix.</p>
                            <p>Vous serez averti par e-mail et SMS.</p>
                        </td>
                        <td class="grey lighten-4">
                            <p>17.59 € TTC</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
<!--        <div class="section">-->
<!--            <div class="row">-->
<!--                <div class="col m3 s3 center ">-->
<!--                    <input type="checkbox" name="Retrait" id="retrait" />-->
<!--                    <label for="retrait">Retrait au magasin</label>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
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