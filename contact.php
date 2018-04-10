<?php
require_once ('views/page_top.php');
$en_post = $_SERVER['REQUEST_METHOD'] === 'POST'; //Indique si on est en réception
$validation = array(
    'firstname' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => 'Firstname must have at least 2 characters.',
    ),
    'lastname' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => 'Lastname must have at least 2 characters.',
    ),
    'email' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => 'The email isn\'t valid.' ,
    ),
  );

//Validation when in reception
if($en_post){
    //Champ firstname
    $validation['firstname']['value'] = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
    //Minimum 2 caractères
    $validation['firstname']['is_valid'] = strlen($validation['firstname']['value']) >= 2;
    //lastname
    $validation['lastname']['value'] = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
    //Minimum 2 caractères
    $validation['lastname']['is_valid'] = strlen($validation['lastname']['value']) >= 2;
    //email
    $validation['email']['value'] = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    //filter the characters in email
    $validation['email']['is_valid'] = (false !== filter_var($validation['email']['value'],  FILTER_VALIDATE_EMAIL));

}

?>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>MelGood</title>
    <meta name="MelGood" content="nassim/camile/corina" >
    <link rel="stylesheet" href="style/main.css">
    <script src="script/main.js"></script>
    <script src="script/jquery-3.2.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
<header>
    <div id="header">
        <div class="col-m-2">
            <img src="images/logo.png" alt="logo">
        </div>
        <div class="menu-mobile">
            <div class="menu-btn" id="menu-hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav>
                <ul class="row-noshow">
                    <li class="col-4 col-m-3">
                        <div id="home">
                            <a href="index.php">Acceuil</a>
                        </div>
                    </li>
                    <li class="col-4 col-m-3">
                        <div id="service">
                            <a href="commande.php">Commander</a>
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
</header>
<main>
    <div style="padding-left:16px">
        <h2>Nous joindre chez MelGood</h2>
        <p>menu responsif.</p>
        <form method="post" id="register">
                <h2>Registration</h2>
                <fieldset>
                    <legend>Please fill the form to register to our website</legend>
                    <div>
                        <label for="firstname">Firstname</label>
                        <input type="text" name="firstname" id="firstname"  placeholder="Firstname"
                               class="<?= $en_post && !$validation['firstname']['is_valid'] ? 'invalide' : '' ?>"
                               value="<?= $en_post ? $validation['firstname']['value'] : '' ?>"/>
                        <?php if($en_post && !$validation['firstname']['is_valid']){
                            echo '<span>' . $validation['firstname']['err_msg'] . '</span>';
                        }

                        ?>
                    </div>
                    <div>
                        <label for="lastname">Lastname</label>
                        <input type="text" name="lastname" id="lastname" placeholder="Lastname"
                               class="<?= $en_post && !$validation['lastname']['is_valid'] ? 'invalide' : '' ?>"
                               value="<?= $en_post ? $validation['lastname']['value'] : '' ?>"/>
                        <?php if($en_post && !$validation['lastname']['is_valid']){
                            echo '<span>' . $validation['lastname']['err_msg'] . '</span>';
                        }

                        ?>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" placeholder="Courriel"
                               class="<?= $en_post && !$validation['email']['is_valid'] ? 'invalide' : '' ?>"
                               value="<?= $en_post ? $validation['email']['value'] : '' ?>"
                        />

                        <?php if($en_post && !$validation['email']['is_valid'] || ! check_mail($validation['email']['value'])){
                            echo '<span>' . $validation['email']['err_msg'] . '</span>';
                        }
                        ?>
                    </div>
                </fieldset>
                <input type="submit" value="Submit">
            </form>
           </div>

</main>
<footer>
    <footer>
        <div id="footer">
            <div class="sit-map col-m-6 col-4">
                <h3>Site Map :</h3>
                <div class="menu-footer">
                    <nav>
                        <ul>
                            <li><a href="index.php">Acceuil</a></li>
                            <li><a href="commande.php">Commande</a></li>
                            <li><a href="contact.php">Contacter nous</a></li>
                            <li><a href="apropos.php">Apropos</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- start RESEAUX SOCIAUX -->
            <div class="reseau-soc col-m-6 col-4">
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
    </footer>
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