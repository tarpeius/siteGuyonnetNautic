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
            <input id="name" class="input" name="nom" type="text"><br />
        </div>
        <div class="row">
            <label for="email">Votre Adresse Mail :</label><br />
            <input id="email" class="input" name="email" type="text"><br />
        </div>
        <div class="row">
            <label for="objet">Objet :</label><br />
            <input id="email" class="input" name="objet" type="text"><br />
        </div>
        <div class="row">
            <label for="message">Votre message:</label><br />
            <textarea id="message" class="input hauteurTextArea" name="message" rows="20" cols="30"></textarea><br />
        </div>
        <input type="submit" class="waves-effect waves-light btn-large" value="Envoyer">
    </form>
    <div class="divider margin"></div>
</div>