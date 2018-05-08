<div>
    <H1 class="header center light-blue-text text-darken-4">
        <?php
        if(isset($_GET['sousCateg'])){
            echo ucfirst($_GET['sousCateg']);
        }elseif (isset($_GET['marque'])){
            echo ucfirst($_GET['marque']);
        }else{
            echo ucfirst($categorie['nom_categorie']);
        }

        ?>
    </H1>
    <!--    <div class="divider"></div>-->
    <nav>
        <div class="nav-wrapper blue darken-4">
            <div class="container">
                <div class="col s12">
                    <a href="index.php?c=armement&a=afficher" class="breadcrumb"><?php echo ucfirst($categorie['nom_categorie']);?></a>
                </div>
            </div>
        </div>
    </nav>
    <div class="divider"></div>
<!--    <div id="sidebar">-->
<!--        <form class="col m2">-->
<!--            <div class="input-field col m12">-->
<!--                <select>-->
<!--                    <option value="" disabled selected>Trier par Marque</option>-->
<!--                    <option value="1">See Doo</option>-->
<!--                    <option value="2">Yamaaha</option>-->
<!--                    <option value="3">Pacific craft</option>-->
<!--                </select>-->
<!--                <label>Marque</label>-->
<!--            </div>-->
<!--            <div class="input-field col m12">-->
<!--                <select>-->
<!--                    <option value="" disabled selected>Trier par Prix</option>-->
<!--                    <option value="1">Croissant</option>-->
<!--                    <option value="2">Decroissant</option>-->
<!--                    <option value="3">Promotions</option>-->
<!--                </select>-->
<!--                <label>Prix</label>-->
<!--            </div>-->
<!--            <div class="input-field col m12">-->
<!--                <select>-->
<!--                    <option value="" disabled selected>Trier par Nom</option>-->
<!--                    <option value="1">Croissant</option>-->
<!--                    <option value="2">Decroissant</option>-->
<!--                </select>-->
<!--                <label>Nom</label>-->
<!--            </div>-->
<!--        </form>-->
<!--    </div>-->
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
            foreach ($pageProduit as $unProduit){
                ?>
                <div class="col s12 m4">
                    <a href="index.php?c=armement&a=ficheProduit&id=<?php echo $unProduit['reference']?>">
                        <div class="card">
                            <div class="card">
                                <div class="card-image">
                                    <img class="responsive-img tailleImage" src="Util/img/<?php echo $unProduit['photo_article'] ?>">
                                </div>
                                <div class="card-content">
                                    <p class="textCard black-text text-darken-2 center-align"><?php echo $unProduit['nom_article']?></p>
                                    <p class="textCard black-text text-darken-4 center-align"><strong><?php echo $unProduit['prix_article']?> €</strong></p>
                                </div>
                                <div class="card-action">
                                    <a class="red-text text-darken-3" href="index.php?c=armement&a=ficheProduit&id=<?php echo $unProduit['reference']?>">Fiche Produit</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
            }
            ?>
        </div>
        <!-- pagination -->
        <ul class="pagination">
            <li class=" <?php if($pageActuelle==1){echo "btn-flat disabled";}?>"><a href="index.php?c=armement&a=afficher&page=<?php echo ($pageActuelle-1) ;?>"><i class="material-icons">chevron_left</i></a></li>
            <?php
            for($i=1;$i<=$nbpage;$i++){
                $current="";
                $disabled = "";
                if($pageActuelle==($i)){
                    $current = "active";
                }?>
                <li class="<?php echo $current." ".$disabled;?>"><a href="index.php?c=armement&a=afficher&page=<?php echo ($i) ;if (isset($sousCateg)){echo '&sousCateg='.$sousCateg;}if(isset($marque)){echo '&marque='.$marque;}?>"><?php echo ($i) ;?></a></li>
                <?php
            }
            ?>
            <li class="waves-effect <?php if($pageActuelle>=($nbpage)){echo "btn-flat  disabled";}?>"><a href="index.php?c=armement&a=afficher&page=<?php echo ($pageActuelle+1) ;?>"><i class="material-icons">chevron_right</i></a></li>
        </ul>
        <!-- fin pagination -->
    </div><!-- container -->
</div>
<i class="material-icons" onclick="topFunction()" id="myBtn" title="Go to top">navigation</i>
<script>
    $(document).ready(function() {
        $('select').material_select();
    });
</script>
