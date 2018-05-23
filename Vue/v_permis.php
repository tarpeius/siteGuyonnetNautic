<div class="row">
    <div class="col m5 offset-m1">
        <h1 class="thin-text">Permis Bateau </h1>
    </div>
    <div class="col m5 ">
        <div class="photoPermis">
            <img id="imgPermis" class="responsive-img" src="Util/img/DSC_0183.JPG"/>
        </div>
    </div>
</div>
<div class="divider"></div>
<div class="toutPermis">
    <div class="container">
        <div class="divider"></div>
        <div class="row">
            <div class="barreBouton">
                <div class="col m4 s12">
                    <div class="center-align">
                        <h4>PERMIS COTIER</h4>
                        <a href="#cotier" class="btn-large blue darken-4 btnPermis">Acceder</a>
                    </div>

                </div>
                <div class="col m4 s12">
                    <div class="center-align">
                        <h4>PERMIS FLUVIAL</h4>
                        <a href="#fluvial" class="btn-large blue darken-4 btnPermis">Acceder</a>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="center-align">
                        <h4>PERMIS HAUTURIER</h4>
                        <a href="#hauturier" class="btn-large blue darken-4 btnPermis">Acceder</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
    </div>
</div>
<div class="ancrePermis" id="marge-cotier"></br></br></div>
<div class="cotier" >
    <div class="infoCotier" id="cotier">
        <div class="container valign-wrapper" >
            <h3 >Permis Cotier</h3>
        </div>
    </div>
    <div class="container" >
        <div class="row">
            <div class="col m4 offset-m1">
                <h4>Dates de préparation</h4>
                <p> Cours Théoriques <?php echo strtoupper($cotier->getMois())." ".$cotier->getAnnee() ?></p>

                    <?php
                        foreach ($coursCotier as $unCotier) {
                            echo "<p> ".$unCotier->getCours()."</p>";
                        }
                    ?>
                <br>
                <h4>Pratique</h4>

                <p> <?php echo $cotier->getPratique()?> </p>
            </div>
            <div class="col m4 offset-m3">
                <h4>EXAMEN</h4>
                <p>  <?php echo $cotier->getExamenDate()." à ".$cotier->getExamenLieu()?> </p>

                <h4>TARIFS</h4>

                <p> <?php echo "Formation : ".$cotier->getFormation()."€"?> </p>

                <p> <?php echo "Timbres fiscaux : ".$cotier->getTimbre()."€"?> </p>

                <p> Total : 498€ </p>

                <h5>Si vous possédez le Permis Fluvial</h5>

                <p>Formation : 300€</p>

                <p>Timbres fiscaux : 38€</p>

                <p>Total : 338€</p>
            </div>
        </div>
        <div class="row">
            <div class="col m6  offset-m1">
                <h4>Composition de votre dossier</h4>
                <p>2 photos d'identité en couleurs</p>

                <p>Timbres fiscaux de 38€ (droit d'inscription à l'examen)</p>

                <p>Timbres fiscaux de 70€ (délivrance du permis)</p>

                <p>Photocopie d'une pièce d'identité (carte d'identité, passeport)</p>
            </div>
            <div class="col m3  offset-m1">
                <h4> Formulaires</h4>
                <a href="<?php echo $cotier->getFormulaire() ?>"> Formulaire permis </a>
                <br>
                <a href="<?php echo $cotier->getCertificat() ?>"> Certificat d'aptitude</a>
            </div>
        </div>
    </div>
</div>
<div class="divider"></div>
<div class="ancrePermis" id="marge-fluvial"></br></br></div>

<div class="fluvial" id="fluvial">
    <div class="infoCotier">
        <div class="container valign-wrapper">
            <h3>Permis Fluvial</h3>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col m4 offset-m1">
                <h4>Dates de préparation</h4>
                <p> Cours Théoriques <?php echo strtoupper($fluvial->getMois())." ".$fluvial->getAnnee() ?></p>

                <?php
                foreach ($coursFluvial as $unFluvial) {
                    echo "<p> ".$unFluvial->getCours()."</p>";
                }
                ?>
                <br>
                <h4>Pratique</h4>

                <p> <?php echo $fluvial->getPratique()?> </p>
            </div>
            <div class="col m4 offset-m3">
                <h4>EXAMEN</h4>
                <p>  <?php echo $fluvial->getExamenDate()." à ".$fluvial->getExamenLieu()?> </p>

                <h4>TARIFS</h4>

                <p> <?php echo "Formation : ".$fluvial->getFormation()."€"?> </p>

                <p> <?php echo "Timbres fiscaux : ".$fluvial->getTimbre()."€"?> </p>

                <p> Total : 498€ </p>

                <h5>Si vous possédez le Permis Cotier</h5>

                <p>Formation : 300€</p>

                <p>Timbres fiscaux : 38€</p>

                <p>Total : 338€</p>
            </div>
        </div>
        <div class="row">
            <div class="col m6 offset-m1">
                <h4>Composition de votre dossier</h4>
                <p>2 photos d'identité en couleurs</p>

                <p>Timbres fiscaux de 38€ (droit d'inscription à l'examen)</p>

                <p>Timbres fiscaux de 70€ (délivrance du permis)</p>

                <p>Photocopie d'une pièce d'identité (carte d'identité, passeport)</p>
            </div>
            <div class="col m3  offset-m1">
                <h4> Formulaires</h4>
                <a href="<?php echo $fluvial->getFormulaire() ?>"> Formulaire permis </a>
                <br>
                <a href="<?php echo $fluvial->getCertificat() ?>"> Certificat d'aptitude</a>
            </div>
        </div>
    </div>
</div>
<div class="divider"></div>
<div class="ancrePermis" id="marge-hauturier"></br></br></div>
<div class="hauturier" id="hauturier">
    <div class="infoCotier">
        <div class="container valign-wrapper">
            <h3>Permis Hauturier</h3>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col m4 offset-m1">
                <h4>Dates de préparation</h4>
                <p> Cours Théoriques <?php echo strtoupper($hauturier->getMois())." ".$hauturier->getAnnee() ?></p>

                <?php
                foreach ($coursHauturier as $unHauturier) {
                    echo "<p> ".$unHauturier->getCours()."</p>";
                }
                ?>

                <p> <?php echo $hauturier->getPratique()?> </p>
            </div>
            <div class="col m4 offset-m3">
                <h4>Reservation</h4>
                <p>  Nombre de places limité (6)</p>

                <h4>EXAMEN</h4>
                <p>  <?php echo $hauturier->getExamenDate()." à ".$hauturier->getExamenLieu()?> </p>

                <h4>TARIFS</h4>

                <p> <?php echo "Formation : ".$hauturier->getFormation()."€"?> </p>

                <p> <?php echo "Timbres fiscaux : ".$hauturier->getTimbre()."€"?> </p>

                <p> Total : 638€</p>
            </div>
        </div>
        <div class="row">
            <div class="col m6 offset-m1">
                <h4>Composition de votre dossier</h4>
                <p>1 photo d'identité en couleurs</p>

                <p>Timbres fiscaux de 38€ (droit d'inscription à l'examen)</p>

                <p>Permis cotier</p>
            </div>
            <div class="col m3  offset-m1">
                <h4> Formulaires</h4>
                <a href="<?php echo $hauturier->getFormulaire() ?>"> Formulaire permis </a>
            </div>
        </div>
    </div>
</div>
<div class="divider"></div>
<i class="material-icons" onclick="topFunction()" id="myBtn" title="Go to top">navigation</i>
<script>
    $(document).ready(function() {
        $('select').material_select();
    });
</script>