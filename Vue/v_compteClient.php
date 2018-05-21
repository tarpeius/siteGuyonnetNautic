<?php

?>
    <H1 class="header center light-blue-text text-darken-4">
        Compte client
    </H1>
    <?php
    if(!empty($erreur)){
        echo"
        <div class='container'>
            <div class=\"row\" id=\"alert_box\">
                <div class=\"col s12 m12\">
                    <div id='messageErreur' class=\" red darken-1\">
                        <div class=\"row\">
                            <div class=\"col s12 m10\">
                                <div class=\"card-content white-text\">
                                    <p class=\"center-align\">".$erreur."</p>
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
    <div class="divider"></div>
<div class="container">
    <div id="compteClient" class="row">
        <div class="col s12 m4 l3">
            <div class="collection">
                <?php
                if (!empty($_COOKIE['client'])) {
                    echo "<a class=\"collection-item blue active\" href=\"index.php?c=compteClient&a=afficher\">Compte client</a>";
                }
                ?>
                <a class="collection-item blue-text" href="index.php?c=compteClient&a=suiviCommande">Suivi commande</a>
                <a class="collection-item blue-text" href="index.php?c=panier&a=afficher">Panier</a>
            </div>
        </div>
        <div class="col s12 m8 l6 center-align">
            <h3 >Identifiants</h3>
        </div>
    </div>
    <div class="col s12 m8 l12">
        <form method="post" action="index.php?c=compteClient&a=modifierInfosClient">
          <div class="row">
                <div class="input-field col s12 m8">
              <input id="email_compte" name="Email" type="email" class="validate" value="<?php if (!empty($client)){echo $client['email_client'];} ?>">
              <label for="email_compte">Email</label>
            </div>
              <div class="input-field col s12 m4">
                  <a href="index?c=compteClient&a=afficherModifMdp" class="waves-effect waves-light btn blue">changer mot de passe</a>
              </div>
          </div>
          <div class="row s6">
            <div class="input-field col s12 m6">
              <input id="nom_compte" name="Nom" type="text" class="validate" value="<?php if (!empty($client)){echo $client['nom_client'];} ?>">
              <label for="nom_compte">Nom</label>
            </div>
              <div class="input-field col s12 m3">
                  <input id="prenom_compte" name="Prenom" type="text" class="validate" value="<?php if (!empty($client)){echo $client['prenom_client'];} ?>">
                  <label for="prenom_compte">Prenom</label>
              </div>
          </div>
            <div class="row">
                <h3 class="center-align">Coordonnées</h3>
                <div class="input-field col s12 m12">
                    <input id="adresse_compte" name="Adresse" type="text" class="validate" value="<?php if (!empty($client)){echo $client['adresse_client'];} ?>">
                    <span class="red-text"></span>
                    <label for="adresse_compte">Adresse</label>
                </div>
                <div class="input-field col s4 m4">
                    <input id="cp_compte" name="Cp" type="text" class="validate" value="<?php if (!empty($client)){echo $client['cp_client'];} ?>">
                    <span class="red-text"></span>
                    <label for="cp_compte">Code Postal</label>
                </div>
                <div class="input-field col s8 m8">
                    <input id="ville_compte" name="Ville" type="text" class="validate" value="<?php if (!empty($client)){echo $client['ville_client'];} ?>">
                    <span class="red-text"></span>
                    <label for="ville_compte">Ville</label>
                </div>
                <div class="input-field col s6 m12">
                    <input id="tel_compte" name="Telephone" type="text" class="validate" value="<?php if (!empty($client)){echo $client['tel_client'];} ?>">
                    <span class="red-text"></span>
                    <label for="tel_compte">Telephone</label>
                </div>
            </div>
            <div class="col s9 offset-s9">
                <div class="row">
                    <input type="submit" name="modifier" class="waves-effect waves-light btn-large" value="Modifier"/>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('select').material_select();
    });
</script>