<div>
    <H1 class="header center light-blue-text text-darken-4"><?php echo $produit['nom_article']?></H1>
    <!--    <div class="divider"></div>-->
    <nav>
        <div class="nav-wrapper blue darken-4">
            <div class="container">
                <div class="col s12">
                    <a href="index.php?c=<?php echo $nomCateg?>&a=afficher" class="breadcrumb"><?php echo $nomCateg?></a>
                    <a href="index.php?c=<?php echo $nomCateg?>&a=afficher&marque=<?php echo $logoMarque['nom_marque'];?>" class="breadcrumb"><?php echo $logoMarque['nom_marque'] ?></a>
                </div>
            </div>
        </div>
    </nav>
    <div class="divider margin"></div>
</div>
<div class="container">
    <div class="row">
        <div class="col m6">
            <div class="carousel carousel-slider" id="carousel">
                <div class="carousel-item carouselItem" href="#one!">
                    <img class="imgCarouProd" src="Util/img/<?php  echo $produit['photo_article']?>">
                </div>
                <?php
                    foreach ($photoProduit as $unePhoto){
                ?>
                        <div class="carousel-item carouselItem" href="#one!">
                            <img class="imgCarouProd" src="Util/img/<?php  echo $unePhoto['url_photo']?>">
                        </div>
                <?php
                    }
                ?>
            </div>
        </div>
        <div class="col m6">
            <div class="container">
                <div class="center-align">
                    <h4><?php echo $produit['nom_article'] ?></h4>
                </div>
                <div class="row">
                    <div class="col m4">
                        <h5><?php echo $produit['prix_article'] ?>€</h5>
                    </div>
                    <div class="col m5 offset-m3">
                        <img class="logoFicheProd" src="Util/img/<?php echo $logoMarque['logo_marque'] ?>">
                    </div>
                </div>
                <div class="divider"></div>
                <div class="row">
                    <div>
                        <p><?php echo $produit['resume_article'] ?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <form method="POST" action="index.php?c=panier&a=ajouterArticle">
                        <div class="col m2">
                            <select class="browser-default" name="nbProduit">
                                <?php
                                    for ($i =1 ; $i<=$nbProduit;$i++){
                                ?>
                                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col m8 offset-m2">
                            <a class="btn" href="index.php?c=panier&a=ajouterArticle&id=<?php echo $produit['reference'] ?>">Ajouter au panier</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col m6" id="prod">
            <div class="swiper-container swiper-container-horizontal">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><img class="imgSwiper" src="Util/img/<?php  echo $produit['photo_article']?>"/></div>
                    <?php
                        foreach ($photoProduit as $unePhoto){
                    ?>
                        <div class="swiper-slide"><img class="imgSwiper" src="Util/img/<?php  echo $unePhoto['url_photo']?>"/></div>
                    <?php
                        }
                    ?>
                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
        <div class="divider margin"></div>
        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s6"><a class="active " href="#description">Description</a></li>
                    <li class="tab col s6"><a  href="#ficheTech">Fiche Technique</a></li>
                </ul>
            </div>
            <div id="description" class="col s12">
                <div class="container">
                    <p>
                        <?php echo $produit['desc_article'] ?>
                    </p>
                </div>

            </div>
            <div id="ficheTech" class="col s12">
                <table class="responsive-table">
                    <tbody>
                    <tr>
                        <td>Références</td>
                        <td><?php echo $produit['reference'] ?></td>
                    </tr>
                    <tr>
                        <td>Motorisation</td>
                        <td><?php echo $produit['motorisation_article'] ?> cv</td>
                    </tr>
                    <tr>
                        <td>Poids</td>
                        <td><?php echo $produit['poids_article'] ?> kg</td>

                    </tr>
                    <tr>
                        <td>Dimension</td>
                        <td><?php echo $produit['dimensions_article'] ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <div class="divider margin"></div>

</div><!-- container -->
</div>
<i class="material-icons" onclick="topFunction()" id="myBtn" title="Go to top">navigation</i>
<script>
    $(document).ready(function() {
        $('select').material_select();
    });

    $(document).ready(function(){
        $img = $('.carouselItem img'), // on cible les images contenues dans le carrousel
            indexImg = $img.length , // on définit l'index du dernier élément
            console.log(indexImg);

        $('.carousel').carousel();

        if (indexImg !=1){
            autoplay();


        }

        function autoplay() {
            setTimeout(autoplay, 6000);
            $('.carousel').carousel('next');
        }
    });

    $(document).ready(function(){
        $('.materialboxed').materialbox();
    });

     var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            clickable: true,
        },
         navigation: {
             nextEl: '.swiper-button-next',
             prevEl: '.swiper-button-prev',
         },
    });
</script>
