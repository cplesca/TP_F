<?php
?>
<footer>
    <div id="footer">
        <div class="sit-map col-m-6 col-4">
            <h3>Site Map :</h3>
            <div class="menu-footer">
                <nav>
                    <ul>
                        <li><a href="index.php">Acceuil</a></li>
                        <li><a href="comande.php">Commande</a></li>
                        <li><a href="contact.php">Contacter nous</a></li>
                        <li><a href="apropos.php">Apropos</a></li>
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
            <h3>Contacter nous :</h3>
            <div itemscope itemtype="http://schema.org/LocalBusiness">
                <h2><span itemprop="name">MelGood</span></h2>
                <span itemprop="description">caramel</span>
                <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                    <span itemprop="streetAddress">9367 rue chondoré</span>
                    <span itemprop="addressLocality">Montreal</span>,
                    <span itemprop="addressRegion">Quebec</span>
                </div>
                TELEPhone: <span itemprop="telephone">438.922.62.50</span>
                <a href="mailto:j-local@melgood.com" itemprop="email">
                    j-local@melgood.com</a>
            </div>
        </div>
    </div>
    <!-- // script pour masquer et afficher le menu mobile -->
    <script>
        $(document).ready(function(){
            $('#menu-hamburger').click(function(){
                $('nav ul').toggleClass('expand');
            });
        });
    </script>
</footer>
</body>
</html>