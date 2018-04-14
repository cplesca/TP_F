<?php
const PAGE_NAME = 'Accueil';

require_once 'functions/tr.php';

require_once 'views/page_top.php';
?>
    <main>
        <div>
            <a class="lang" href="index.php?lang=<?= $lang === 'fr' ? 'en' : 'fr' ?> "><?= $lang === 'fr' ? 'EN' : 'FR' ?></a>
        </div>
        <div  class="col-6 col-m-12">
            <img src="images/caramel1.png" alt="logo">
        </div>
        <div class="col-6 col-m-12">
            <h2><?= tr("Bienvenue chez MelGood") ?></h2>
            <p><?= tr("Chez MelGood, nous offrons du caramel à tartiner de qualité et fait à la main à Montréal. Notre mission est de redéfinir ce qu'est un bon caramel et d’ajouter de la saveur à chacun de vos repas") ?></p>
        </div>
        <div class="col-6 col-m-12">
            <h2><?= tr("Notre histoire")?></h2>
            <p><?= tr("Tout a commencé par un soir de février, lorsque Justin demanda à sa mère la recette de caramel qu’elle faisait à noël chaque année. Il a ensuite commencé à en faire lui-même et à en vendre à ses proches, qui n’ont pas pu résister à la saveur alléchante qui a su faire danser leurs papilles gustatives. Par la suite, ayant vu le potentiel de la future entreprise, Tristan (ancien collègue de classe de Justin), avec son instinct de requin investisseur, est venu s’incruster au sein de la compagnie. Depuis, l’entreprise a constamment évolué dans le but de vous offrir son délicieux caramel qui donne des câlins à l’estomac de chaque personne qui le croise") ?>.</p>
        </div>
        <div class="fonction col-6">
            <a class="col-m-2 col-6 button" href="commande.php"><?= tr("Commande") ?></a>
        </div>
        <div class="fonction col-6">
        <a class="col-m-2  button" href="contact.php"><?= tr("Contactez nous") ?></a>
        </div>

    </main>


<?php require_once 'views/page_bottom.php';

