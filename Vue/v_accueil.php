
<!--<div class="container">-->
    <div id="blocLogos" class="col s12 m12">
        <div class="row">
            <div class="center-align col s12 m3">
                <img id="logoAccueil" src="Util/img/Copie de GUYONNET-logo.png">
            </div>
            <div id="listeLogo" class="center-align col s12 m9">
                <img class="responsive-img" src="Util/img/listeLogo1.png">
                <img class="responsive-img" src="Util/img/listeLogo2.png">
            </div>
        </div>
     </div>
<!--</div>-->
<div id="carouselAccueil" class="col s12 m12">
    <div class="carousel carousel-slider center">
        <div class="carousel-item carouselItem" href="#one!">
            <img class="imgCarouProd" src="Util/img/DSC_0014.JPG">
        </div>
        <div class="carousel-item" href="#two!">
            <img class="imgCarouProd" src="Util/img/DSC_0025.JPG">
        </div>
        <div class="carousel-item" href="#three!">
            <img class="imgCarouProd" src="Util/img/DSC_0022.JPG">
        </div>
    </div>
</div>

<!-- PHOTO CATEGORIE BATEAU -->
<div id="blocCategories" class="row">
    <div class="col m2 s12 divPhoto">
        <a href="index.php?c=bateau&a=afficher"> <img class="imgCateg" src="Util/img/Medline-850-1s.jpg">
            <div class="blocTitle">
                <div class="title">Bateau</div>
                <div class="button">
                    <span class="btn waves-effect waves-light light-blue darken-4">Voir</span>
                </div>
            </div>
        </a>
    </div>
    <!-- PHOTO CATEGORIE BATEAU -->
    <!-- PHOTO CATEGORIE JET -->
    <div class="col m2 divPhoto">
        <a href="index.php?c=motomarine&a=afficher"> <img class="imgCateg" src="Util/img/RXT-X 300_332_MY18.jpg">
            <div class="blocTitle">
                <div class="title">Jet</div>
                <div class="button">
                    <span class="btn waves-effect waves-light light-blue darken-4">Voir</span>
                </div>
            </div>
        </a>
    </div>
    <!-- PHOTO CATEGORIE JET -->
    <div class="col m2 divPhoto">
        <a href="index.php?c=moteur&a=afficher"> <img class="imgCateg" src="Util/img/Spark Trixx_2 riders 0309_MY17.jpg">
            <div class="blocTitle">
                <div class="title">Moteur</div>
                <div class="button">
                    <span class="btn waves-effect waves-light light-blue darken-4">Voir</span>
                </div>
            </div>
        </a>
    </div>
    <div class="col m2 divPhoto">
        <a href="index.php?c=remorque&a=afficher"> <img class="imgCateg" src="Util/img/GTR 230_191_MY17.jpg">
            <div class="blocTitle">
                <div class="title">Remorque</div>
                <div class="button">
                    <span class="btn waves-effect waves-light light-blue darken-4">Voir</span>
                </div>
            </div>
        </a>
    </div>
    <div class="col m2 divPhoto">
        <a href="index.php?c=armement&a=afficher"> <img class="imgCateg" src="Util/img/autre nom - GTR 230_1738_MY17.jpg">
            <div class="blocTitle">
                <div class="title">Armement</div>
                <div class="button">
                    <span class="btn waves-effect waves-light light-blue darken-4">Voir</span>
                </div>
            </div>
        </a>
    </div>
    <div class="col m2 divPhoto">
        <a href="index.php?c=permis&a=afficher"> <img class="imgCateg" src="Util/img/GTX LTD - RXT-X large_2J8A6789_MY18.jpg">
            <div class="blocTitle">
                <div class="title">Permis</div>
                <div class="button">
                    <span class="btn waves-effect waves-light light-blue darken-4">Voir</span>
                </div>
            </div>
        </a>
    </div>
</div>
<script>
    $('.carousel').carousel({
        padding: 200
    });
    autoplay()
    function autoplay() {
        $('.carousel').carousel('next');
        setTimeout(autoplay, 4500);
    }
</script>

