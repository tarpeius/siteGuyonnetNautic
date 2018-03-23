<div>
    <H1 class="header center light-blue-text text-darken-4">Remorques</H1>
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
            foreach ($toutProduit as $unProduit){
                ?>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="Util/img/<?php echo $unProduit['photo_article'] ?>">
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
