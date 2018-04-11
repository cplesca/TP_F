<?php
?>
<footer>
    <div id="footer">
        <div class="sit-map col-m-6 col-4">
            <h3><?= tr("Plan du Site") ?> :</h3>
            <div class="menu-footer">
                <nav>
                    <ul>
                        <li><a href="index.php"><?= tr("Acceuil") ?></a></li>
                        <li><a href="commande.php"><?= tr("Commande") ?></a></li>
                        <li><a href="contact.php"><?= tr("Contactez nous") ?></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- start RESEAUX SOCIAUX -->
        <div class="reseau-soc col-4">
            <div id="social-menu">
                <ul>
                    <li>
                        <a href ="http://www.facebook.com">
                            <img src="images/fb.png" alt="Facebook"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.twitter.com">
                            <img src="images/twitter.png" alt="Twitter"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.linkedin.com">
                            <img src="images/linkedin.png" alt="linkedin"/>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- end RESEAUX SOCIAUX -->
        </div>
        <div id="map">
            <!-- google map -->
            <span><?= tr("Nos distributeurs") ?>:</span><br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2794.886129276202!2d-73.59870968444022!3d45.53249697910183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc919645b41ee7f%3A0x92b2f188c27b5b15!2s760+Boulevard+Rosemont%2C+Montr%C3%A9al%2C+QC+H2S+3R2!5e0!3m2!1sfr!2sca!4v1522769611991" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="tel col-m-6 col-4">
            <h3><?= tr("Nous contacter") ?> :</h3>
            <div itemscope itemtype="http://schema.org/LocalBusiness">
                <h2><span itemprop="name">MelGood</span></h2>
                <span itemprop="description">caramel</span>
                <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                    <span itemprop="streetAddress">760 Boulvard Rosement</span>
                    <span itemprop="addressLocality">Montréal</span>,
                    <span itemprop="addressRegion">Quebec</span>
                </div>
                <?= tr("Téléphone") ?>: <span itemprop="telephone">438.922.62.50</span><br>
                <a href="mailto:melgood_caramel@hotmail.com" itemprop="email">
                    melgood_caramel@hotmail.com</a>
            </div>
        </div>
    </div>

</footer>
</body>
</html>