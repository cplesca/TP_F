<?php
const PAGE_NAME = 'Accueil';

require_once 'functions/tr.php';

require_once 'views/page_top.php';

?>


<main>
    <div style="padding-left:16px">
        <h2><?= tr("Adresse de livraison") ?></h2>
    </div>
    <form>

        <label><?= tr("Nom Complet") ?>:</label>
        <input type="text" id="full_name" name="full_name"  required>

        <label><?= tr("Couriel") ?> :</label>
        <input type="email" id="email_addr" name="email_addr" required>

        <label>Votre adresse :</label>
        <input type="adress" id="aadress" name="adress" required>

        <label>code postal :</label>
        <input type="text" id="cod_post" name="cod_post"  required>

        <label>Quantiter :</label>
        <input type="number" id="quantiter" name="quantiter" value="1" min="1" max="4" required>


        <br><br>

        <label>Code de promotion :</label>
        <input type="text" id="promo" name="promo" pattern="[A-Za-z0-9]{6}"
               title="Le code de promotion contient six caractères alphanumériques.">

        <input type="submit" value="Effectuer la réservation" />
    </form>

</main>

<?php require_once 'views/page_bottom.php';