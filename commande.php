<?php
const PAGE_NAME = 'Accueil';

require_once 'functions/tr.php';

require_once 'views/page_top.php';

?>
    <div class="lang">
        <a href = "index.php?lang=<?= $lang==='fr'? 'en' : 'fr' ?> "><?= $lang==='fr'? 'EN' : 'FR' ?></a>
        <style>
            .lang {
                float: right;
                width: 15%;
                background: white;
                padding: 10px;
                text-align: center;
                border-radius: 100%;
                color: saddlebrown;
                font-weight: bold;
            }
        </style>
    </div>
<main>
    <div style="padding-left:16px">
        <h2><?= tr("Livraison") ?></h2>
    </div>
    <form>
        <label><?= tr("Quantitée") ?> :</label>
        <input type="number" id="quantiter" name="quantiter" value="1" min="1" max="100" required>

        <label><?= tr("Nom Complet") ?>:</label>
        <input type="text" id="full_name" name="full_name"  required>

        <label><?= tr("Couriel") ?> :</label>
        <input type="email" id="email_addr" name="email_addr" required>

        <label><?= tr("Téléphone") ?> :</label>
        <input type="tel" id="tel" name="tel" required>

        <label><?= tr("Adresse postale") ?> :</label>
        <input type="adress" id="aadress" name="adress" required>

        <label><?= tr("code postal") ?> :</label>
        <input type="text" id="cod_post" name="cod_post"  required>
        <label>Code de promotion :</label>
        <input type="text" id="promo" name="promo" pattern="[A-Za-z0-9]{6}"
               title="Le code de promotion contient six caractères alphanumériques.">

        <a href = "commande.php" onclick=""><button type="button"><?= tr("Commande")            ?></button></a>

    </form>

</main>

<?php require_once 'views/page_bottom.php';










