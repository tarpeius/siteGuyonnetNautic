<form method="POST" action="index.php?c=commande&a=terminerCommande">
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
            <H3 class="header center light-blue-text text-darken-4">Paiement</H3>
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
        } elseif (!empty($reussi)) {
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
        <div class="divider margin"></div>
    <div class="container conteneurCommande">
        <ul class="collapsible">
            <li>
                <div class="collapsible-header"><i class="material-icons">payment</i>Carte bancaire</div>
                <div class="collapsible-body"><span>Mode de paiement par carte bancaire.</span><br>
                    <p>
                        <input class="with-gap" name="modePaiement" type="radio" id="cb" value="Carte bancaire" />
                        <label for="cb">Carte bancaire</label>
                    </p>
                </div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">payment</i>Paypal</div>
                <div class="collapsible-body"><span>Mode de paiement par Paypal.</span><br>
                    <p>
                        <input class="with-gap" name="modePaiement" type="radio" id="paypal" value="Paypal" />
                        <label for="paypal">Paypal</label>
                    </p>
                </div>
            </li>
        </ul>
        <div class="section">
            <div class="row">
                <div class="col s6 left-align">
                    <button class="waves-effect waves-light btn-large" name="retour">
                        <a class="white-text" href="javascript:history.go(-1)">Retour</a>
                    </button>
                </div>
                <div class="col s6 right-align">
                    <button type="submit" class="waves-effect waves-light btn-large" name="action">Finaliser la commande
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

<script type="text/javascript">
    $(document).ready(function(){
        $('.collapsible').collapsible();
    });
</script>