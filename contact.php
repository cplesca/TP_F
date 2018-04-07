<?php
const PAGE_NAME = 'Accueil';

require_once 'functions/tr.php';

require_once 'views/page_top.php';

?>
<a class = "lang" href = "contact.php?lang=<?= $lang==='fr'? 'en' : 'fr' ?> "><?= $lang==='fr'? 'EN' : 'FR' ?></a>
    <style>
        .lang {
            width: 115px;
            height: 25px;
            background: #4E9CAF;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            color: white;
            font-weight: bold;
        }
    </style>
<main>
    <div style="padding-left:16px">
        <h2><?= tr("Contactez nous") ?></h2>
        <form >
            <label><?= tr("Nom Complet") ?>:</label>
            <input type="text" name="Name" value="<?= tr("Nom&Prénom") ?>">
            <label><?= tr("Couriel") ?> :</label>
            <input type="email" id="email_addr" name="email_addr" value="<?= tr("votre@couriel.com") ?>">
            <textarea name="textarea" rows="10" cols="50"><?= tr("Tappez votre message ici") ?></textarea>
            <input type="submit" value="<?= tr("Soumettre") ?>">


        </form>
    </div>

</main>
<?php require_once 'views/page_bottom.php';