
<form method="POST" action="index.php?c=commande&a=recapitulatif">
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
        <H3 class="header center light-blue-text text-darken-4">Transport</H3>
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
    <div class="row">
        <input type="checkbox" name="Retrait" id="retrait" />
        <label for="retrait">Retrait au magasin</label>
        <div class="col s9 offset-s9">
            <button type="submit" class="waves-effect waves-light btn-large" name="action">Continuer ma commande
                <i class="material-icons right">shopping_cart</i>
            </button>
        </div>
    </div>
</div>
</form>