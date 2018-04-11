<?php
const PAGE_NAME = 'Accueil';

require_once 'functions/tr.php';

require_once 'views/page_top.php';
?>
    <main>

        <div class="col-m-2">
            <img src="images/caramel1.png" alt="logo">
        </div>
        <div class="col-m-2">
            <h2><?= tr("Bien venu chez MelGood") ?></h2>
            <p><?= tr("Chez MelGood, nous 
     offrons du caramel
     à tartiner de qualité
     et fait à la main à 
     Montréal. Notre mission 
     est de redéfinir ce qu'est
     un bon caramel et d’ajouter
     de la saveur à chacun de
     vos repas") ?></p>
        </div>
        <div class="col-m-2 button">
            <a href="commande.php">
                <button type="button"><?= tr("Commande") ?></button>
            </a>
        </div>
        <div class="col-m-2 button">
            <a href="contact.php">
                <button type="button"><?= tr("Contactez nous") ?></button>
            </a>
        </div>
        <div>
            <a class="lang" href="index.php?lang=<?= $lang === 'fr' ? 'en' : 'fr' ?> "><?= $lang === 'fr' ? 'EN' : 'FR' ?></a>
        </div>
    </main>


<?php require_once 'views/page_bottom.php';

