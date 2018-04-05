<?php
require_once(dirname(__FILE__) . '/../defines.php');
require_once 'functions/tr.php';

?>
<div class = "lang">
    <a href = "index.php?lang=<?= $lang==='fr'? 'en' : 'fr' ?> "><?= $lang==='fr'? 'en' : 'fr' ?></a>
</div>
<div id="header">
    <div class="col-m-2">
        <img src="images/logo.png" alt="logo">
    </div>
    <div class="menu-mobile">
        <div class="menu-btn" id="menu-hamburger">
            <span></span>
            <span></span>.

            <span></span>
        </div>
        <nav>
            <ul class="row-noshow">
                <li class="col-4 col-m-3">
                    <div id="home">
                        <a href="index.php"><?= tr("Acceuil") ?></a>
                    </div>
                </li>
                <li class="col-4 col-m-3">
                    <div id="service">
                        <a href="comande.php"><?= tr("Commande") ?></a>
                    </div>
                </li>
                <li class="col-4 col-m-3">
                    <div id="contact">
                        <a href="contact.php">Contact</a>
                    </div>
                </li>
                <li class="col-4 col-m-3">
                    <div id="apropos">
                        <a href="apropos.php">Apropos</a>
                    </div>
                </li>
            </ul>
        </nav>

    </div>
</div>

