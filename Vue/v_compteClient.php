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
        </ul>
    </div>
    <div class="col s12 m8 l9">
        <form>
          <div class="row">
              <h3>Identifiants</h3>
                <div class="input-field col s12 m8">
              <input id="email_compte" type="email" class="validate">
              <label for="email_compte">Email</label>
            </div>
              <div class="input-field col s12 m4">
                  <a class="waves-effect waves-light btn blue">changer mot de passe</a>
              </div>
          </div>
          <div class="row s6">
            <div class="input-field col s12 m6">
              <input id="nom_compte" type="text" class="validate">
              <label for="nom_compte">Nom</label>
            </div>
              <div class="input-field col s12 m3">
                  <input id="prenom_compte" type="text" class="validate">
                  <label for="prenom_compte">Prenom</label>
              </div>
          </div>
            <div class="row">
                <div class="input-field col s12 m3">
                    <select name="NaissanceJour"><option value="" disabled selected></option>
                        <?php $j= 0 ;
                        while ($j<=31)
                        {
                            ?>
                            <option value='<?php echo $j;?>' ><?php echo $j;?></option>
                            <?php $j++;
                        }
                        ?>
                    </select>
                    <label>Jour</label>
                </div>
                <div class="input-field col s12 m3">
                    <select name="NaissanceMois">
                        <option value="" disabled selected></option>
                        <option value="01">Janvier</option>
                        <option value="02">Fevrier</option>
                        <option value="03">Mars</option>
                        <option value="04">Avril</option>
                        <option value="05">Mai</option>
                        <option value="06">Juin</option>
                        <option value="07">Juillet</option>
                        <option value="08">Aout</option>
                        <option value="09">Septembre</option>
                        <option value="10">Octobre</option>
                        <option value="11">Novembre</option>
                        <option value="12">Decembre</option>
                    </select>
                    <label>Mois</label>
                    <span class="red-text"><?php if (!empty($naissErr)){echo "*".$naissErr;} ?></span>
                </div>
                <div class="input-field col s12 m6">
                    <select name="NaissanceAnnee"><option value="" disabled selected></option>
                        <?php $j= 1901 ;
                        while ($j<=2018)
                        {
                            ?>
                            <option value='<?php echo $j;?>' ><?php echo $j;?></option>
                            <?php $j++;
                        }
                        ?>
                    </select>
                    <label>Année</label>
                </div>
            </div>
            <div class="row">
                <h3>Coordonnées</h3>
                <div class="input-field col s12 m12">
                    <input id="last_name" name="Adresse" type="text" class="validate" value="">
                    <span class="red-text"></span>
                    <label for="last_name">Adresse</label>
                </div>
                <div class="input-field col s4 m4">
                    <input id="last_name" name="Cp" type="text" class="validate" value="">
                    <span class="red-text"></span>
                    <label for="last_name">Code Postal</label>
                </div>
                <div class="input-field col s8 m8">
                    <input id="last_name" name="Ville" type="text" class="validate" value="">
                    <span class="red-text"></span>
                    <label for="last_name">Ville</label>
                </div>
                <div class="input-field col s6 m12">
                    <input id="last_name" name="Telephone" type="text" class="validate" value="">
                    <span class="red-text"></span>
                    <label for="last_name">Telephone</label>
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