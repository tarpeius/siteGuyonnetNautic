<?php
if (!empty($res)) {
    echo"
        <div class='container'>
            <div class=\"row\" id=\"alert_box\">
                <div class=\"col s12 m12\">
                    <div id='messageErreur' class=\" green darken-1\">
                        <div class=\"row\">
                            <div class=\"col s12 m10\">
                                <div class=\"card-content white-text\">
                                    <p class=\"center-align\">".$res."</p>
                                </div>
                            </div>
                            <div class=\"col s12 m2\">
                                <i class=\"fa fa-times icon_style\" id=\"alert_close\" aria-hidden=\"true\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
}
?>
<div class="container">
    <div>
        <div>
            <h1>Contact</h1>
            <h5>Telephone : </h5>
                <p>05 59 30 71 98</p>
            <h5>Adresse :</h5>
                <p>Avenue du Corps Franc Pommies</p>
        </div>
    </div>
    <div>
        <h1>Formulaire de contact</h1>
    </div>
    <form id="contact_form" action="index.php?c=contact&a=nouveau" method="POST" enctype="multipart/form-data">
        <div class="row">
            <label for="nom">Votre Nom :</label><br />
            <input id="name" class="input" name="nom" type="text" required><br />
        </div>
        <div class="row">
            <label for="email">Votre Adresse Mail :</label><br />
            <input id="email" class="input" name="email" type="text" required><br />
        </div>
        <div class="row">
            <label for="objet">Objet :</label><br />
            <input id="objet" class="input" name="objet" type="text" required><br />
        </div>
        <div class="row">
            <label for="message">Votre message:</label><br />
            <textarea id="message" class="input hauteurTextArea" name="message" rows="20" cols="30" required></textarea><br />
        </div>
        <input type="submit" class="waves-effect waves-light btn-large" value="Envoyer">
    </form>
    <div class="divider margin"></div>
</div>