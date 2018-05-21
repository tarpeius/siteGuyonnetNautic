<div>
    <H1 class="header center light-blue-text text-darken-4">Identification</H1>
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
                            <div class=\"col s12 m10\">
                                <div class=\"card-content white-text\">
                                    <p class=\"center-align\">".$reussi."</p>
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
    <div class="row padding">
        <div class="col m6 center">
            <form method="POST" action="index.php?c=connexion&a=connecte">
                <h3>Connectez-vous!</h3>
                <div class="row">
                    <div class="input-field col m6 boxInscri">
                        <input id="email" type="email" name="Email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m6 boxInscri">
                        <input id="password" type="password" name="Password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" class="waves-effect waves-light btn-large" value="Connexion"/>
                </div>
                <div class="row">
                    <a href="index.php?c=compteClient&a=afficherVerifEmailMdp">Mot de passe oublié</a>
                </div>
            </form>
        </div>
        <div class="col m6 center">
            <form method="POST" action="index.php?c=inscription&a=afficher">
                <div class="row">
                    <h3>Inscrivez-vous!</h3>
                    <div class="input-field col m6 boxInscri">
                        <input id="email" name="Email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" class="waves-effect waves-light btn-large" value="Inscription"/>
                </div>
            </form>
        </div>
    </div>
</div>
