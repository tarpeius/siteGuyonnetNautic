<div>
    <H1 class="header center light-blue-text text-darken-4">Inscription</H1>
</div>
<div class="container">
    <form method="POST" action="index.php?c=inscription&a=ajout">
        <div class="row">
            <?php
            if(!empty($_SESSION['msg'])){
                echo"
            <div class=\"row\" id=\"alert_box\">
                <div class=\"col s12 m12\">
                    <div id='messageErreur' class=\" red darken-1\">
                        <div class=\"row\">
                            <div class=\"col s12 m10\">
                                <div class=\"card-content white-text\">
                                    <p class=\"center-align\">Il y a 1 ou plusieurs erreur(s) dans le formulaire</p>
                                </div>
                            </div>
                            <div class=\"col s12 m2\">
                                <i class=\"fa fa-times icon_style\" id=\"alert_close\" aria-hidden=\"true\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>";
            }
            ?>
            <h2>Identifiants</h2>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" name="Email" type="email" class="validate" value="<?php if (!empty($_POST['Email'])){echo $_POST['Email'];} ?>">
                        <span class="red-text"><?php if (!empty($emailErr)){echo "*".$emailErr;} ?></span>
                        <label for="email">Adresse Email</label>
                    </div>
                </div>
                <div class="input-field col s6">
                    <input id="password" name="Password" type="password" class="validate" >
                    <span class="red-text"><?php if (!empty($passwordErr)) {echo "*".$passwordErr;} ?></span>
                    <label for="password">Mot de passe</label>
                </div>
                <div class="input-field col s6">
                    <input id="password" name="Confirm" type="password" class="validate" >
                    <label for="password">Confirmer la mot de passe</label>
                </div>
        </div>
        <div class="row">
            <h2>Infos Personnelles</h2>
            <div class="input-field col s6">
                <input id="last_name" type="text" name="Nom" class="validate" value="<?php if (!empty($_SESSION['Nom'])){echo $_SESSION['Nom'];} ?>">
                <span class="red-text"><?php if (!empty($nomErr)){echo "*".$nomErr;} ?></span>
                <label for="last_name">Nom</label>
            </div>
            <div class="input-field col s6">
                <input id="last_name" type="text" name="Prenom" class="validate" value="<?php if (!empty($_SESSION['Prenom'])){echo $_SESSION['Prenom'];} ?>">
                <span class="red-text"><?php if (!empty($prenomErr)){echo "*".$prenomErr;} ?></span>
                <label for="last_name">Prenom</label>
            </div>
            <div class="input-field col s1">
                <select name="NaissanceJour"><option value="" disabled selected></option>
                    <?php $j= 1 ;
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
            <div class="input-field col s2">
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
            <div class="input-field col s2">
                <select name="NaissanceAnnee"><option value="" disabled selected></option>
                    <?php $j= 2018 ;
                    while ($j>1900)
                    {
                        ?>
                        <option value='<?php echo $j;?>' ><?php echo $j;?></option>
                        <?php $j--;
                    }
                    ?>
                </select>
                <label>Année</label>
            </div>
        </div>
        <div class="row">
            <h2>Coordonnées</h2>
            <div class="input-field col s12">
                <input id="last_name" name="Adresse" type="text" class="validate" value="<?php if (!empty($_SESSION['Adresse'])){echo $_SESSION['Adresse'];} ?>">
                <span class="red-text"><?php if (!empty($adresseErr)){echo "*".$adresseErr;} ?></span>
                <label for="last_name">Adresse</label>
            </div>
            <div class="input-field col s4">
                <input id="last_name" name="Cp" type="text" class="validate" value="<?php if (!empty($_SESSION['Cp'])){echo $_SESSION['Cp'];} ?>">
                <span class="red-text"><?php if (!empty($cpErr)){echo "*".$cpErr;} ?></span>
                <label for="last_name">Code Postal</label>
            </div>
            <div class="input-field col s8">
                <input id="last_name" name="Ville" type="text" class="validate" value="<?php if (!empty($_SESSION['Ville'])){echo $_SESSION['Ville'];} ?>">
                <span class="red-text"><?php if (!empty($villeErr)){echo "*".$villeErr;} ?></span>
                <label for="last_name">Ville</label>
            </div>
            <div class="input-field col s6">
                <input id="last_name" name="Telephone" type="text" class="validate" value="<?php if (!empty($_SESSION['Telephone'])){echo $_SESSION['Telephone'];} ?>">
                <span class="red-text"><?php if (!empty($telErr)){echo "*".$telErr;} ?></span>
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
    $('#alert_close').click(function(){
        $( "#alert_box" ).fadeOut( "slow", function() {
        });
    });
</script>