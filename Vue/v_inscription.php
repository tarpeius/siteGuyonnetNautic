<div>
    <H1 class="header center light-blue-text text-darken-4">Inscription</H1>
</div>
<div class="container">
    <form method="POST" action="">
        <div class="row">
            <h2>Identifiants</h2>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Adresse Email</label>
                    </div>
                </div>
                <div class="input-field col s6">
                    <input id="password" type="password" class="validate">
                    <label for="password">Mot de passe</label>
                </div>
                <div class="input-field col s6">
                    <input id="password" type="password" class="validate">
                    <label for="password">Confirmer la mot de passe</label>
                </div>
        </div>
        <div class="row">
            <h2>Infos Personnelles</h2>
            <div class="input-field col s6">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Nom</label>
            </div>
            <div class="input-field col s6">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Prenom</label>
            </div>
            <div class="input-field col s1">
                <select>
                    <option value="" disabled selected>Jour</option>
                    <option value="1">01</option>
                    <option value="2">02</option>
                    <option value="3">O03</option>
                </select>
                <label>Jour</label>
            </div>
            <div class="input-field col s2">
                <select>
                    <option value="" disabled selected>Mois</option>
                    <option value="1">Janvier</option>
                    <option value="2">Fevrier</option>
                    <option value="3">Mars</option>
                </select>
                <label>Mois</label>
            </div>
            <div class="input-field col s2">
                <select>
                    <option value="" disabled selected>Année</option>
                    <option value="1">1915</option>
                    <option value="2">1916</option>
                    <option value="3">1917</option>
                </select>
                <label>Année</label>
            </div>
        </div>
        <div class="row">
            <h2>Coordonnées</h2>
            <div class="input-field col s12">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Adresse</label>
            </div>
            <div class="input-field col s4">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Code Postal</label>
            </div>
            <div class="input-field col s8">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Ville</label>
            </div>
            <div class="input-field col s6">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Telephone</label>
            </div>
        </div>
        <input type="submit" class="waves-effect waves-light btn-large" value="Valider"/>
    </form>
</div>
<div class="divider margin "></div>
<script>
    $(document).ready(function() {
        $('select').material_select();
    });
</script>