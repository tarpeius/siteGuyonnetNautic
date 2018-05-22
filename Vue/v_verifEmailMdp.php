
<form method="POST" action="index.php?c=compteClient&a=verificationMdp">
    <div>
        <H1 class="header center light-blue-text text-darken-4">Mot de passe oublié</H1>
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
    <div class="container">
        <div class="row padding">
            <div class="col m6 s6 center">
                <div class="row">
                    <div class="input-field col m6 boxInscri">
                        <input id="email" type="email" name="Email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" class="waves-effect waves-light btn-large" value="Envoyer"/>
                </div>
            </div>

            <div class="col m6 s6 center">
                <div class="card-panel section">
                    <div class="card-title "><h5>Informations complémentaires</h5></div>
                    <div class="divider"></div>
                    <p>Vous allez pouvoir recréer un mot de passe qui vous permettra d'accéder à votre compte client.<br><br>

                        Il vous suffit simplement de saisir l'adresse e-mail que vous avez utilisée pour créer votre compte et de cliquer sur le bouton «Envoyer».<br><br>

                        Vous recevrez très rapidement un e-mail qui vous permettra de créer un nouveau mot de passe afin d'accéder à votre espace client en toute sécurité.</p>
                </div>
            </div>
        </div>
    </div>
</form>
