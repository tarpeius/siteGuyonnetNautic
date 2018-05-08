<header>
<!-- MENU -->
    <nav>
        <div class="nav-wrapper light-blue darken-4">
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="left hide-on-med-and-down">
                <li id="homeNav"><a href="index.php?c=accueil&a=afficher"> <i class="material-icons">home</i> </a></li>
                <li class="CategNav"><a class="dropdown-button" href="index.php?c=bateau&a=afficher" data-activates="dropdown1">Bateau</a></li>
                <li class="CategNav"><a class="dropdown-button" href="index.php?c=motomarine&a=afficher" data-activates="dropdown2">Motomarine</a></li>
                <li class="CategNav"><a class="dropdown-button" href="index.php?c=moteur&a=afficher" data-activates="dropdown3">Moteur</a></li>
                <li class="CategNav"><a class="dropdown-button" href="index.php?c=remorque&a=afficher" data-activates="dropdown4">Remorque</a></li>
                <li class="CategNav"><a class="dropdown-button" href="index.php?c=armement&a=afficher" data-activates="dropdown5">Armement</a></li>
                <li class="CategNav"><a class="dropdown-button" href="index.php?c=permis&a=afficher" data-activates="dropdown6">Permis</a></li>
<!--                <li class="CategNav"><a class="dropdown-button" href="#!" data-activates="dropdown7">Services</a></li>-->
            </ul>
            <ul id="mobile-demo" class="side-nav">
                <li><a href="index.php?c=accueil&a=afficher">Accueil</a></li>
                <li><a href="index.php?c=bateau&a=afficher">Bateau</a></li>
                <li><a href="index.php?c=motomarine&a=afficher">Motomarine</a></li>
                <li><a href="index.php?c=moteur&a=afficher">Moteur</a></li>
                <li><a href="index.php?c=remorque&a=afficher">Remorque</a></li>
                <li><a href="index.php?c=armement&a=afficher">Armement</a></li>
                <li><a href="index.php?c=permis&a=afficher">Permis</a></li>
<!--                <li><a href="#!">Services</a></li>-->
            </ul>
            <ul class="right hide-on-med-and-down">
<!--                <li id='homeNav'><a class="dropdown-button" href="index.php?c=contact&a=afficher">Contact</a></li>-->
                <li id='homeNav'><a class="dropdown-button" href="index.php?c=panier&a=afficher"><i class="material-icons tiny">shopping_basket</i></a></li>
                    <?php if (!empty($_COOKIE['client'])) {
                            echo "<li class=\"CategNav\"> <a class='dropdown-button' data-activates='dropdown8'> <span>Bienvenue !</span> </a> </li>";
                        }else{ echo "<li id='homeNav'> <a class='dropdown-button' href='index.php?c=connexion&a=authentification'> <span>Se connecter</span> </a> </li>";}
                    ?>
            </ul>
        </div>
    </nav>

    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
        <li class="SousCategNav light-blue darken-4"><a class="center-align" href="index.php?c=bateau&a=afficher"><span class="white-text">Bateau</span></a></li>
        <li class="divider"></li>
        <li class="SousCategNav "><a href="index.php?c=bateau&a=afficher&marque=pacific craft"><span class="blue-text text-darken-4">Pacific Craft</span></a></li>
        <li class="divider"></li>
        <li class="SousCategNav "><a href="index.php?c=bateau&a=afficher&marque=zodiac"><span class="blue-text text-darken-4">Zodiac</span></a></li>
        <li class="divider"></li>
        <li class="SousCategNav "><a href="index.php?c=bateau&a=afficher&marque=capelli"><span class="blue-text text-darken-4">Capelli Tempest</span></a></li>
        <li class="divider"></li>
        <li class="SousCategNav "><a href="index.php?c=bateau&a=afficher&marque=rigiflex"><span class="blue-text text-darken-4">Rigiflex</span></a></li>
        <li class="divider"></li>
        <li class="SousCategNav "><a href="index.php?c=bateau&a=afficher&marque=funyak"><span class="blue-text text-darken-4">Fun-Yak</span></a></li>
    </ul>
    <ul id="dropdown2" class="dropdown-content">
        <li class="SousCategNav light-blue darken-4"><a class="center-align" href="index.php?c=motomarine&a=afficher"><span class="white-text">Motomarine</span></a></li>
        <li class="divider"></li>
        <li class="SousCategNav "><a href="index.php?c=motomarine&a=afficher&marque=seadoo"><span class="blue-text text-darken-4">Seadoo</span></a></li>
    </ul>
    <ul id="dropdown3" class="dropdown-content">
        <li class="SousCategNav light-blue darken-4"><a class="center-align" href="index.php?c=moteur&a=afficher"><span class="white-text">Moteur</span></a></li>
        <li class="divider"></li>
        <li class="SousCategNav "><a href="index.php?c=moteur&a=afficher&marque=yamaha"><span class="blue-text text-darken-4">Yamaha</span></a></li>
    </ul>
    <ul id="dropdown4" class="dropdown-content">
        <li class="SousCategNav light-blue darken-4"><a class="center-align" href="index.php?c=remorque&a=afficher"><span class="white-text">Remorque</span></a></li>
        <li class="divider"></li>
        <li class="SousCategNav "><a href="index.php?c=remorque&a=afficher&marque=rocca"><span class="blue-text text-darken-4">Rocca</span></a></li>
    </ul>
    <ul id="dropdown5" class="dropdown-content">
        <li class="SousCategNav light-blue darken-4"><a class="center-align" href="index.php?c=armement&a=afficher"><span class="white-text">Armement</span></a></li>
        <li class="divider"></li>
        <li class="SousCategNav "><a href="index.php?c=armement&a=afficher&marque=plastimo"><span class="blue-text text-darken-4">Plastimo</span></a></li>
        <li class="divider"></li>
        <li class="SousCategNav "><a href="index.php?c=armement&a=afficher&marque=navicom"><span class="blue-text text-darken-4">Navicom</span></a></li>
    </ul>
    <ul id="dropdown6" class="dropdown-content">
        <li class="SousCategNav light-blue darken-4"><a class="center-align" href="index.php?c=permis&a=afficher"><span class="white-text">Permis</span></a></li>
        <li class="divider"></li>
        <li class="SousCategNav "><a href="index.php?c=permis&a=afficher#cotier"><span class="blue-text text-darken-4">Cotier</span></a></li>
        <li class="divider"></li>
        <li class="SousCategNav "><a href="index.php?c=permis&a=afficher#fluvial"><span class="blue-text text-darken-4">Fluvial</span></a></li>
        <li class="divider"></li>
        <li class="SousCategNav "><a href="index.php?c=permis&a=afficher#hauturier"><span class="blue-text text-darken-4">Hauturier</span></a></li>
    </ul>
    <ul id="dropdown8" class="dropdown-content">
        <li class="SousCategNav light-blue darken-4"><a class="center-align"><span class="white-text">Mon compte</span></a></li>
        <li class="divider"></li>
        <li class="SousCategNav "><a href="index.php?c=compteClient&a=afficher"><span class="blue-text text-darken-4">Informations</span></a></li>
        <li class="divider"></li>
        <li class="SousCategNav "><a href="index.php?c=compteClient&a=suiviCommande"><span class="blue-text text-darken-4">Commandes</span></a></li>
        <li class="divider"></li>
        <li class="SousCategNav "><a href="index.php?c=connexion&a=deconnecte"><span class="blue-text text-darken-4">Se déconnecter</span></a></li>
    </ul>
</header>
<script>


    $('.dropdown-button').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrainWidth: false, // Does not change width of dropdown to that of the activator
            hover: true, // Activate on hover
            gutter: 0, // Spacing from edge
            belowOrigin: false, // Displays dropdown below the button
            alignment: 'left', // Displays dropdown with edge aligned to the left of button
            stopPropagation: false // Stops event propagation
        }
    );
    $('.button-collapse').sideNav({
        menuWidth: 300, // Default is 300
        //edge: 'right', // Choose the horizontal origin
        closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
        draggable: true, // Choose whether you can drag to open on touch screens,
        onOpen: function(el) { /* Do Stuff* / }, // A function to be called when sideNav is opened
        onClose: function(el) { /* Do Stuff* */ }, // A function to be called when sideNav is closed
     }
     );
</script>