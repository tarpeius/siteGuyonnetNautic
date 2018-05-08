<?php
//var_dump($_SESSION);
?>
    <div class="commandeEtape">
        <ol>
            <li class="testLi">
                <span>1. S'identifier</span>
            </li>
            <li class="light-blue-text text-darken-4 testLi">
                <span><b>2. Adresse</b></span>
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
        <H3 class="titreCommande header center light-blue-text text-darken-4"><b>Adresse</b></H3>
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
    }
    ?>
    <div class="divider margin"></div>
<div class="container conteneurCommandeRecapitulatif">
    <form method="POST" action="index.php?c=commande&a=adresse">
        <div class="row">
            <h4 class="light-blue-text text-darken-4">Adresse de facturation</h4>
            <div class="input-field col s12 m12">
                <input id="adresse_compte" name="Adresse" type="text" class="validate" value="<?php if (isset($client)){echo $client['adresse_client'];} else { echo $_POST['Adresse'];} ?>">
                <span class="red-text"></span>
                <label for="adresse_compte">Adresse</label>
            </div>
            <div class="input-field col s4 m4">
                <input id="cp_compte" name="Cp" type="text" class="validate" value="<?php if (isset($client)){echo $client['cp_client'];} else { echo $_POST['Cp'];}?>">
                <span class="red-text"></span>
                <label for="cp_compte">Code Postal</label>
            </div>
            <div class="input-field col s8 m8">
                <input id="ville_compte" name="Ville" type="text" class="validate" value="<?php if (isset($client)){echo $client['ville_client'];} else { echo $_POST['Ville'];}?>">
                <span class="red-text"></span>
                <label for="ville_compte">Ville</label>
            </div>
        </div>
        <h4 class="light-blue-text text-darken-4">Adresse de livraison</h4>
        <div class="row">
            <div class="input-field col s12 m12">
                <input id="adresse_compte" name="AdresseLivraison" type="text" class="validate" value="<?php if (isset($adresse)){echo $adresse['ligne'];} elseif(!empty($client)){ echo $client['adresse_client'];} else { echo $_POST['AdresseLivraison'];}?>">
                <span class="red-text"></span>
                <label for="adresse_compte">Adresse</label>
            </div>
            <div class="input-field col s4 m4">
                <input id="cp_compte" name="CpLivraison" type="text" class="validate" value="<?php if (isset($adresse)){echo $adresse['code_postal'];} elseif(!empty($client)){ echo $client['cp_client'];} else { echo $_POST['CpLivraison'];}?>">
                <span class="red-text"></span>
                <label for="cp_compte">Code Postal</label>
            </div>
            <div class="input-field col s8 m8">
                <input id="ville_compte" name="VilleLivraison" type="text" class="validate" value="<?php if (isset($adresse)){echo $adresse['ville'];} elseif(!empty($client)){ echo $client['ville_client'];} else { echo $_POST['VilleLivraison'];}?>">
                <span class="red-text"></span>
                <label for="ville_compte">Ville</label>
            </div>
        </div>
            <div class="section">
                <div class="row">
                    <div class="col s6 left-align">
                        <button class="waves-effect waves-light btn-large" name="retour">
                            <a class="white-text" href="index.php?c=panier&a=afficher">Retour</a>
                        </button>
                    </div>
                    <div class="col s6 right-align">
                        <button type="submit" class="waves-effect waves-light btn-large" name="action">Suivant
                        </button>
                    </div>
                </div>
            </div>
    </form>

    </div>

</div>
