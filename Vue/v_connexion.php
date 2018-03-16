<div>
    <H1 class="header center light-blue-text text-darken-4">Inscription</H1>
</div>
<div class="divider margin"></div>
<div class="container">
    <div class="row">
        <div class="col m6 center">
            <form method="POST" action="">
                <h3>Connectez-vous!</h3>
                <div class="row">
                    <div class="input-field col m6 boxInscri">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m6 boxInscri">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" class="waves-effect waves-light btn-large" value="Connexion"/>
                </div>
            </form>
        </div>
        <div class="col m6 center">
            <form method="POST" action="index.php?c=inscription&a=afficher">
                <div class="row">
                    <h3>Inscrivez-vous!</h3>
                    <div class="input-field col m6 boxInscri">
                        <input id="email" type="email" class="validate">
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