<?php
require_once(dirname(__FILE__) . '/../defines.php');
<<<<<<< HEAD
require_once 'functions/tr.php';

?>
<div class = "lang">
    <a href = "index.php?lang=<?= $lang==='fr'? 'en' : 'fr' ?> "><?= $lang==='fr'? 'en' : 'fr' ?></a>
</div>
=======
?>
>>>>>>> b39e50724a7552c3ab58b55f5a56777a66e389d5
<div id="header">
    <div class="col-m-2">
        <img src="images/logo.png" alt="logo">
    </div>
    <div class="menu-mobile">
        <div class="menu-btn" id="menu-hamburger">
            <span></span>
<<<<<<< HEAD
            <span></span>.

=======
            <span></span>
>>>>>>> b39e50724a7552c3ab58b55f5a56777a66e389d5
            <span></span>
        </div>
        <nav>
            <ul class="row-noshow">
                <li class="col-4 col-m-3">
                    <div id="home">
<<<<<<< HEAD
                        <a href="index.php"><?= tr("Acceuil") ?></a>
=======
                        <a href="index.php">Acceuil</a>
>>>>>>> b39e50724a7552c3ab58b55f5a56777a66e389d5
                    </div>
                </li>
                <li class="col-4 col-m-3">
                    <div id="service">
<<<<<<< HEAD
                        <a href="comande.php"><?= tr("Commande") ?></a>
=======
                        <a href="comande.php">Commander</a>
>>>>>>> b39e50724a7552c3ab58b55f5a56777a66e389d5
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

