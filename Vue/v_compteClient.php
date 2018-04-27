
<div class="container">
    <H1 class="header center light-blue-text text-darken-4">
        Compte Client
    </H1>
    <div class="divider"></div>
<div id="compteClient" class="row">
    <div class="col s12 m4 l3">
        <ul class="">
            <li class="active">
                <a href="index.php?c=compteClient&a=afficher">Compte client</a>
            </li>
            <li>
                <a href="index.php?c=suiviCommande&a=afficher">Suivi de commandes</a>
            </li>
            <li>
                <a href="index.php?c=panier&a=afficher">Panier</a>
            </li>
        </ul>
    </div>
    <div class="col s12 m8 l9">
        <form>
          <div class="row">
              <h3>Identifiants</h3>
                <div class="input-field col s12 m8">
              <input id="email_compte" type="email" class="validate" value="<?php if (!empty($_SESSION['client'])){echo $_SESSION['client']['email_client'];} ?>">
              <label for="email_compte">Email</label>
            </div>
              <div class="input-field col s12 m4">
                  <a href="index?c=compteClient&a=afficherModifMdp" class="waves-effect waves-light btn blue">changer mot de passe</a>
              </div>
          </div>
          <div class="row s6">
            <div class="input-field col s12 m6">
              <input id="nom_compte" type="text" class="validate" value="<?php if (!empty($_SESSION['client'])){echo $_SESSION['client']['nom_client'];} ?>">
              <label for="nom_compte">Nom</label>
            </div>
              <div class="input-field col s12 m3">
                  <input id="prenom_compte" type="text" class="validate" value="<?php if (!empty($_SESSION['client'])){echo $_SESSION['client']['prenom_client'];} ?>">
                  <label for="prenom_compte">Prenom</label>
              </div>
          </div>
            <div class="row">
                <h3>Coordonnées</h3>
                <div class="input-field col s12 m12">
                    <input id="adresse_compte" name="Adresse" type="text" class="validate" value="<?php if (!empty($_SESSION['client'])){echo $_SESSION['client']['adresse_client'];} ?>">
                    <span class="red-text"></span>
                    <label for="adresse_compte">Adresse</label>
                </div>
                <div class="input-field col s4 m4">
                    <input id="cp_compte" name="Cp" type="text" class="validate" value="<?php if (!empty($_SESSION['client'])){echo $_SESSION['client']['cp_client'];} ?>">
                    <span class="red-text"></span>
                    <label for="cp_compte">Code Postal</label>
                </div>
                <div class="input-field col s8 m8">
                    <input id="ville_compte" name="Ville" type="text" class="validate" value="<?php if (!empty($_SESSION['client'])){echo $_SESSION['client']['ville_client'];} ?>">
                    <span class="red-text"></span>
                    <label for="ville_compte">Ville</label>
                </div>
                <div class="input-field col s6 m12">
                    <input id="tel_compte" name="Telephone" type="text" class="validate" value="<?php if (!empty($_SESSION['client'])){echo $_SESSION['client']['tel_client'];} ?>">
                    <span class="red-text"></span>
                    <label for="tel_compte">Telephone</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m4">
                    <a class="waves-effect waves-light btn green">Modifier</a>
                </div>
            </div>
        </form>
    </div>
  </div>
</div>

<script>
    $(document).ready(function() {
        $('select').material_select();
    });
</script>