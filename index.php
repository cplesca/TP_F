<?php
const PAGE_NAME = 'Accueil';

require_once 'functions/tr.php';

require_once 'views/page_top.php';
?>

    <main>
        <div class ="col-m-2">
            <img src="images/caramel1.png" alt="logo">
            <h2><?= tr("Bien venu chez MelGood") ?></h2>
            <p><?=  tr("Chez MelGood, nous 
     offrons du caramel
     à tartiner de qualité
     et fait à la main à 
     Montréal. Notre mission 
     est de redéfinir ce qu'est
     un bon caramel et d’ajouter
     de la saveur à chacun de
     vos repas")?></p>
        </div>
       <div class="col-m-2 button">
           <a href = "commande.php"><button type="button"><?= tr("Commande")            ?></button></a>
       </div>
       <div class="col-m-2 button">
           <a href = "contact.php"><button type="button"><?= tr("Contactez nous") ?></button></a>
       </div>
       <div id="map">
                <!-- google map -->
                <span><?= tr("Nos distributeurs") ?>:</span><br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2794.886129276202!2d-73.59870968444022!3d45.53249697910183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc919645b41ee7f%3A0x92b2f188c27b5b15!2s760+Boulevard+Rosemont%2C+Montr%C3%A9al%2C+QC+H2S+3R2!5e0!3m2!1sfr!2sca!4v1522769611991" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
       </div>
       </main>


<?php require_once 'views/page_bottom.php';

