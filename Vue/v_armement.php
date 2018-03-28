<div>
    <H1 class="header center light-blue-text text-darken-4">Armement</H1>
    <!--    <div class="divider"></div>-->
    <nav>
        <div class="nav-wrapper blue darken-4">
            <div class="container">
                <div class="col s12">
                    <a href="index.php?c=motomarine&a=afficher" class="breadcrumb"><?php echo $categorie['nom_categorie']?></a>
                </div>
            </div>
        </div>
    </nav>
    <div class="divider"></div>
    <div id="sidebar">
        <form class="col m2">
            <div class="input-field col m12">
                <select>
                    <option value="" disabled selected>Trier par Marque</option>
                    <option value="1">See Doo</option>
                    <option value="2">Yamaaha</option>
                    <option value="3">Pacific craft</option>
                </select>
                <label>Marque</label>
            </div>
            <div class="input-field col m12">
                <select>
                    <option value="" disabled selected>Trier par Prix</option>
                    <option value="1">Croissant</option>
                    <option value="2">Decroissant</option>
                    <option value="3">Promotions</option>
                </select>
                <label>Prix</label>
            </div>
            <div class="input-field col m12">
                <select>
                    <option value="" disabled selected>Trier par Nom</option>
                    <option value="1">Croissant</option>
                    <option value="2">Decroissant</option>
                </select>
                <label>Nom</label>
            </div>
        </form>
    </div>
    <div class="container">
        <div class="row ">
            <div class="col s12 m4">
                <a href="index.php?c=armement&a=afficher&sousCateg=gps">
                    <div class="card-panel grey lighten-5 z-depth-1">
                        <div class="row valign-wrapper">
                            <div class="col s2">
                                <img src="Util/img/MY18_SPARK 2up 600 HO ACE_Licorice _  Mango_3-4 front.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                            </div>
                            <div class="col s10">
                      <span class="black-text">
                        GPS
                      </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col s12 m4">
                <a href="index.php?c=armement&a=afficher&sousCateg=sondeur">
                    <div class="card-panel grey lighten-5 z-depth-1">
                        <div class="row valign-wrapper">
                            <div class="col s2">
                                <img src="Util/img/MY18_SPARK 2up 600 HO ACE_Licorice _  Mango_3-4 front.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                            </div>
                            <div class="col s10">
                  <span class="black-text">
                    Sondeur
                  </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col s12 m4">
                <a href="index.php?c=armement&a=afficher&sousCateg=accastillage">
                    <div class="card-panel grey lighten-5 z-depth-1">
                        <div class="row valign-wrapper">
                            <div class="col s2">
                                <img src="Util/img/MY18_SPARK 2up 600 HO ACE_Licorice _  Mango_3-4 front.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                            </div>
                            <div class="col s10">
                  <span class="black-text">
                    Accastillage
                  </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($toutProduit as $unProduit){
                ?>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img class="responsive-img tailleImage" src="Util/img/<?php echo $unProduit['photo_article'] ?>">
                        </div>
                        <div class="card-content">
                            <p class="center-align"><?php echo $unProduit['nom_article']?></p>
                            <p class="center-align"><?php echo $unProduit['prix_article']?>€</p>
                        </div>
                        <div class="card-action">
                            <a href="index.php?c=motomarine&a=ficheProduit&id=<?php echo $unProduit['reference']?>">Fiche Produit</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
<!--            <div class="col s12 m4">-->
<!--                <a href="">-->
<!--                    <div class="card-panel grey lighten-5 z-depth-1">-->
<!--                        <div class="row valign-wrapper">-->
<!--                            <div class="col s2">-->
<!--                                <img src="Util/img/MY18_SPARK 2up 600 HO ACE_Licorice _  Mango_3-4 front.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
<!--                            </div>-->
<!--                            <div class="col s10">-->
<!--                      <span class="black-text">-->
<!--                        Accastillage-->
<!--                      </span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col s12 m4">-->
<!--                <div class="card">-->
<!--                    <div class="card-image">-->
<!--                        <img src="Util/img/MY18_SPARK 2up 600 HO ACE_Licorice _  Mango_3-4 front.jpg">-->
<!--                        <span class="card-title">Card Title</span>-->
<!--                    </div>-->
<!--                    <div class="card-content">-->
<!--                        <p class="center-align">Yamaha R1</p>-->
<!--                        <p class="center-align">15.000€</p>-->
<!--                    </div>-->
<!--                    <div class="card-action">-->
<!--                        <a href="#">Fiche Produit</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="col s12 m4">-->
<!--                <div class="card">-->
<!--                    <div class="card-image">-->
<!--                        <img src="Util/img/MY18_SPARK 2up 600 HO ACE_Pinneaple _  Candy blue_3-4 front.jpg">-->
<!--                        <span class="card-title">Card Title</span>-->
<!--                    </div>-->
<!--                    <div class="card-content">-->
<!--                        <p class="center-align">Yamaha R2</p>-->
<!--                        <p class="center-align">15.000€</p>-->
<!--                    </div>-->
<!--                    <div class="card-action">-->
<!--                        <a href="#">Fiche Produit</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="col s12 m4">-->
<!--                <div class="card">-->
<!--                    <div class="card-image">-->
<!--                        <img src="Util/img/MY18_SPARK 2up 600 HO ACE_Vanilla _  Blueberry_3-4 front.jpg">-->
<!--                        <span class="card-title">Card Title</span>-->
<!--                    </div>-->
<!--                    <div class="card-content">-->
<!--                        <p class="center-align">Yamaha R3</p>-->
<!--                        <p class="center-align">15.000€</p>-->
<!--                    </div>-->
<!--                    <div class="card-action">-->
<!--                        <a href="#">Fiche Produit</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="row">-->
<!--            <div class="col s12 m4">-->
<!--                <div class="card">-->
<!--                    <div class="card-image">-->
<!--                        <img src="Util/img/yamaha-logo-wallpaper-4.png">-->
<!--                        <span class="card-title">Card Title</span>-->
<!--                    </div>-->
<!--                    <div class="card-content">-->
<!--                        <p class="center-align">Yamaha R1</p>-->
<!--                        <p class="center-align">15.000€</p>-->
<!--                    </div>-->
<!--                    <div class="card-action">-->
<!--                        <a href="#">Fiche Produit</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="col s12 m4">-->
<!--                <div class="card">-->
<!--                    <div class="card-image">-->
<!--                        <img src="Util/img/yamaha-logo-wallpaper-4.png">-->
<!--                        <span class="card-title">Card Title</span>-->
<!--                    </div>-->
<!--                    <div class="card-content">-->
<!--                        <p class="center-align">Yamaha R2</p>-->
<!--                        <p class="center-align">15.000€</p>-->
<!--                    </div>-->
<!--                    <div class="card-action">-->
<!--                        <a href="#">Fiche Produit</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--
<!--            <div class="col s12 m4">-->
<!--                <div class="card">-->
<!--                    <div class="card-image">-->
<!--                        <img src="Util/img/yamaha-logo-wallpaper-4.png">-->
<!--                        <span class="card-title">Card Title</span>-->
<!--                    </div>-->
<!--                    <div class="card-content">-->
<!--                        <p class="center-align">Yamaha R3</p>-->
<!--                        <p class="center-align">15.000€</p>-->
<!--                    </div>-->
<!--                    <div class="card-action">-->
<!--                        <a href="#">Fiche Produit</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->


        <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>
    </div><!-- container -->
</div>
<i class="material-icons orange" onclick="topFunction()" id="myBtn" title="Go to top">navigation</i>
<script>
    $(document).ready(function() {
        $('select').material_select();
    });
</script>
