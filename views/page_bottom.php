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
                        <li><a href="comande.php"><?= tr("Commande") ?></a></li>
                        <li><a href="contact.php"><?= tr("Contacter nous") ?></a></li>
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
                Téléphone: <span itemprop="telephone">438.922.62.50</span><br>
                <a href="mailto:melgood_caramel@hotmail.com" itemprop="email">
                    melgood_caramel@hotmail.com</a>
            </div>
        </div>
    </div>

</footer>
</body>
</html>