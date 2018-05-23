<!--<div class="container">-->
    <div id="blocLogos">
        <div id="blocLogosMargin" class="row">
            <div class="center-align col s12 m12 l3">
                <img id="logoAccueil" src="Util/img/Copie de GUYONNET-logo.png">
            </div>
            <div id="listeLogo" class="center-align">
                <img class="redimensionLogo responsive-img" src="Util/img/listeLogo1.png">
                <img class="redimensionLogo responsive-img" src="Util/img/listeLogo2.png">
            </div>
        </div>
     </div>
<div class="divider"></div>
<!--<div id="testR" class="container">-->
<!--    <div class="row">-->
        <div class="carousel carousel-slider center">
            <div class="carousel-item white-text" href="#one!">
                <img  src="Util/img/DSC_0014.JPG">-->
            </div>
            <div class="carousel-item white-text" href="#two!">
                <img src="Util/img/DSC_0025.JPG">
            </div>
            <div class="carousel-item white-text" href="#three!">
                <img  src="Util/img/DSC_0022.JPG">
            </div>
        </div>

<!--<div class="container">-->
    <!-- PHOTO CATEGORIE BATEAU -->
    <div id="blocCategories" class="row">
        <div class="col m6 s12 l2 divPhoto">
            <a href="index.php?c=bateau&a=afficher"> <img class="imgCateg" src="Util/img/2017-yamaha-f300-eu-na-action-001.jpg">
                <div class="blocTitle">
                    <div class="title">Bateau</div>
                        <span class="button1">Voir</span>
                </div>
            </a>
        </div>
        <!-- PHOTO CATEGORIE BATEAU -->
        <!-- PHOTO CATEGORIE JET -->
        <div class="col m6 s12 l2 divPhoto">
            <a href="index.php?c=motomarine&a=afficher"> <img class="imgCateg" src="Util/img/cq5dam.web_.1322.1.jpeg">
                <div class="blocTitle">
                    <div class="title">Jet</div>
                        <span class="button1">Voir</span>
                </div>
            </a>
        </div>
        <!-- PHOTO CATEGORIE JET -->
        <div class="col m6 s12 l2 divPhoto">
            <a href="index.php?c=moteur&a=afficher"> <img class="imgCateg" src="Util/img/2017-yamaha-f350-eu-na-action-002.jpg">
                <div class="blocTitle">
                    <div class="title">Moteur</div>
                        <span class="button1">Voir</span>
                </div>
            </a>
        </div>
        <div class="col m6 s12 l2 divPhoto">
            <a href="index.php?c=remorque&a=afficher"> <img class="imgCateg" src="Util/img/satellite_mx091s.jpg">
                <div class="blocTitle">
                    <div class="title">Remorque</div>
                        <span class="button1">Voir</span>
                </div>
            </a>
        </div>
        <div class="col m6 s12 l2 divPhoto">
            <a href="index.php?c=armement&a=afficher"> <img class="imgCateg" src="Util/img/52109.jpg">
                <div class="blocTitle">
                    <div class="title">Armement</div>
                        <span class="button1">Voir</span>
                </div>
            </a>
        </div>
        <div class="col m6 s12 l2 divPhoto">
            <a href="index.php?c=permis&a=afficher"> <img class="imgCateg" src="Util/img/DSC_0193.JPG">
                <div class="blocTitle">
                    <div class="title">Permis</div>
                        <span class="button1">Voir</span>
                </div>
            </a>
        </div>
    </div>

    <div class="container">
        <div class="section">
            <div class="s12 m12 center">
                <h2 id="titreAccueil"><strong>Bienvenue</strong> chez Guyonnet Nautic</h2>
                <p class="textAccueil">
                    Guyonnet Nautic, concessionnaire Yamaha, Seadoo, Pacific Craft, Zodiac, Capelli Tempest, Rigiflex, Fun-Yak et Rocca à Pau(64), est spécialisée en vente et réparation de bateau/motomarine sur la région.<br>
                    Vous trouverez une large gamme de bateaux, motomarines (jets), moteurs, et remorques en neuf et occasion.<br>
                    De plus, une boutique d'accessoires, d'armements et de pièces détachées vous attend au magasin.
                    Elle vous accueille du mardi au samedi sur ses horaires d'ouvertures.
                </p>
            </div>
        </div>
    </div>


    <div class="divider"></div>
<div id="blocSkills">
    <div class="container">
        <div class="section">
            <div id="blocCategories" class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center white-text">
                            <i class="large material-icons">flash_on</i>
                        </h2>
                        <h4 class="white-text center">Qualité</h4>
                        <p class="white-text center textAccueil">Notre philosophie est de satisfaire au mieux nos clients</p>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center white-text">
                            <i class="large material-icons">group</i>
                        </h2>
                        <h4 class="white-text center">Disponibilité</h4>
                        <p class="white-text center textAccueil">La disponibilité est un élément essentiel pour répondre aux besoins de chacuns</p>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center white-text">
                            <i class="large material-icons">build</i>
                        </h2>
                        <h4 class="white-text center">Services</h4>
                        <p class="white-text center textAccueil">Réparations bateaux/jet-ski, accompagnement personnalisé dans vos besoins, cours permis bateau</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="divider"></div>
<!--BLOC SELECTION ARTICLE-->
<?php
    if (!empty($selection)) {
?>
    <div class="container">
        <div class="section">
            <h3 style="text-transform: uppercase" class="center">Notre sélection</h3>
            <div class="row">
                <?php
                foreach ($selection as $selections) {
                    echo "<div class=\"col s12 m4\">
                        <div class=\"card\">
                            <div class=\"card-image\">
                                <img id=\"photoCard\" src=\"Util/img/".$selections['photo_article']."\">
                                <span class=\"card-title\"><strong>".$selections['nom_article']."</strong></span>                   
                                <a href=\"index.php?c=bateau&a=ficheProduit&id=".$selections['reference']."\" class=\"btn-floating halfway-fab waves-effect waves-light light-blue darken-3\"><i class=\"large material-icons\">remove_red_eye</i></a>
                            </div>
                            <div class=\"card-content\">
                                <p class=\"textCard\"><strong>".$selections['prix_article']." €</strong></p><br>                         
                                <p class=\"textCard\"><strong>Motorisation : </strong></p> <p>".$selections['motorisation_article']." cv</p>
                                <p class=\"textCard\"><strong>Dimensions (L/l/h) : </strong></p> <p>".$selections['dimensions_article']."</p><br>
                                <span class=\"card-title textCard activator grey-text text-darken-4\">Details<i class=\"material-icons right\">expand_more</i></span>
                            </div>  
                            <div class=\"card-reveal\">
                              <span class=\"card-title grey-text text-darken-4\">Details<i class=\"material-icons right\">close</i></span>
                              <p class=\"textCard\"><strong>Resume : </strong></p> <p>".$selections['resume_article']."</p>
                              <p class=\"textCard\"><strong>Description : </strong></p> <p>".$selections['desc_article']."</p>
                            </div>
                        </div>
                    </div>";
                }
                ?>
            </div>
        </div>
    </div>
<?php
    }
    //var_dump($selection);
?>
<script>
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true
    });
</script>

