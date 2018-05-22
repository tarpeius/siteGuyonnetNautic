
<form method="POST" action="index.php?c=compteClient&a=modifierMdp">
    <div>
        <H1 class="header center light-blue-text text-darken-4">Modifier mot de passe</H1>
    </div>
    <?php
    if(!empty($erreur)){
        echo"
        <div class='container'>
            <div class=\"row\" id=\"alert_box\">
                <div class=\"col s12 m12\">
                    <div id='messageErreur' class=\" red darken-1\">
                        <div class=\"row\">
                            <div class=\"col s12 m12\">
                                <div class=\"card-content white-text\">
                                    <p class=\"center-align\">".$erreur."</p>
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
    <div class="container ">
        <div class="row padding ">
            <div class="col m6 center">
                <div class="row">
                    <div class="input-field col m6 boxInscri">
                        <input id="password" type="password" name="Password" class="validate">
                        <label for="password">Nouveau mot de passe</label>
                    </div>
                    <div class="input-field col s6 boxInscri">
                        <input id="passwordConfirm" name="Confirm" type="password" class="validate" >
                        <label for="password">Confirmer mot de passe</label>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" class="waves-effect waves-light btn-large teal" value="Modifier"/>
                </div>
            </div>
        </div>
    </div>
</form>