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
        <h2>Nous joindre chez MelGood</h2>
        <p>menu responsif.</p>
        <form action="/commande.php">
            First name: <input type="text" name="FirstName" value="Mickey"><br>
            Last name: <input type="text" name="LastName" value="Mouse"><br>
            <input type="submit" value="Submit">
        </form>
    </div>

</main>
<?php require_once 'views/page_bottom.php';