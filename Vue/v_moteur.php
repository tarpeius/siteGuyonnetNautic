<div>
    <H1 class="header center light-blue-text text-darken-4">Moteurs</H1>
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
</div>
<div class="container">
    <div class="row">
        <?php
        foreach ($pageProduit as $unProduit){
            ?>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img class="responsive-img tailleImage" src="Util/img/<?php echo $unProduit['photo_article'] ?>">
                    </div>
                    <div class="card-content">
                        <p class="center-align"><?php echo $unProduit['nom_article']?></p>
                        <p class="center-align"><?php echo $unProduit['prix_article']?></p>
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
    <!-- pagination -->
    <ul class="pagination">
        <li class=" <?php if($pageActuelle==1){echo "btn-flat disabled";}?>"><a href="index.php?c=moteut&a=afficher&page=<?php echo ($pageActuelle-1) ;?>"><i class="material-icons">chevron_left</i></a></li>
        <?php
        for($i=1;$i<=$nbpage;$i++){
            $current="";
            $disabled = "";
            if($pageActuelle==($i)){
                $current = "active";
            }?>
            <li class="<?php echo $current." ".$disabled;?>"><a href="index.php?c=moteur&a=afficher&page=<?php echo ($i) ;?>"><?php echo ($i) ;?></a></li>
            <?php
        }
        ?>
        <li class="waves-effect <?php if($pageActuelle>=($nbpage)){echo "btn-flat  disabled";}?>"><a href="index.php?c=moteur&a=afficher&page=<?php echo ($pageActuelle+1) ;?>"><i class="material-icons">chevron_right</i></a></li>
    </ul>
    <!-- fin pagination -->
</div><!-- container -->
</div>
<i class="material-icons orange" onclick="topFunction()" id="myBtn" title="Go to top">navigation</i>
<script>
    $(document).ready(function() {
        $('select').material_select();
    });
</script>
