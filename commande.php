<?php
const PAGE_NAME = 'Accueil';

require_once 'functions/tr.php';

require_once 'views/page_top.php';

$en_post = $_SERVER['REQUEST_METHOD'] === 'POST'; //Indique si on est en réception
$validation = array(
    'nom_complet' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => tr("Le  doit nom complet n'est pas valide."),
    ),
    'email_addr' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => tr("L'email n'est pas valide."),
    ),
    'tel' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => tr("L'email n'est pas valide."),
    ),
    'adress' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => tr("L'adress n'est pas valide."),
    ),
);
//Validation when in reception
if ($en_post) {
    //Champ firstname
    $validation['nom_complet']['value'] = filter_input(INPUT_POST, 'nom_complet', FILTER_SANITIZE_STRING);
    //Minimum 2 caractères
    $validation['nom_complet']['is_valid'] = strlen($validation['nom_complet']['value']) >= 2;
    //email
    $validation['email_addr']['value'] = filter_input(INPUT_POST, 'email_addr', FILTER_VALIDATE_EMAIL);
    //filter the characters in email
    $validation['email_addr']['is_valid'] = (false !== filter_var($validation['email_addr']['value'], FILTER_VALIDATE_EMAIL));
    //Champ tell
    $validation['tel']['value'] = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_NUMBER_INT);
    //Minimum 10 number
   // $validation['tel']['is_valid'] = strlen($validation['tel']['value']) =10 ;
    //Champ adress
    $validation['adress']['value'] = filter_input(INPUT_POST, 'adress', FILTER_SANITIZE_STRING);
    //Minimum 10 caractères
    $validation['adress']['is_valid'] = strlen($validation['adress']['value']) >= 10;
    //email
}

?>
    <div>
        <a class="lang"
           href="commande.php?lang=<?= $lang === 'fr' ? 'en' : 'fr' ?> "><?= $lang === 'fr' ? 'EN' : 'FR' ?></a>
        <style>
            .lang {
                float: right;
                width: 115px;
                background: white;
                padding: 10px;
                text-align: center;
                border-radius: 5px;
                color: saddlebrown;
                font-weight: bold;
            }
        </style>
    </div>
    <main>
        <div>
            <h2><?= tr("Livraison") ?></h2>
        </div>
        <form action="insertion.php" method="post">
            <label><?= tr("Quantitée") ?> :</label>
            <input type="number" id="quantiter" name="quantiter" value="1" min="1" max="100" required>

            <label><?= tr("Nom Complet") ?>:</label>
            <input type="text" id="nom_complet" name="nom_complet" required
                   class="<?= $en_post && !$validation['nom_complet']['is_valid'] ? 'invalide' : '' ?>"
                   value="<?= $en_post ? $validation['nom_complet']['value'] : '' ?>"/>
            <?php if ($en_post && !$validation['nom_complet']['is_valid']) {
                echo '<span>' . $validation['nom_complet']['err_msg'] . '</span>';
            }  ?>

            <label><?= tr("Couriel") ?> :</label>
            <input type="email" id="email_addr" name="email_addr" required
                   class="<?= $en_post && !$validation['email']['is_valid'] ? 'invalide' : '' ?>"
                   value="<?= $en_post ? $validation['email']['value'] : '' ?>"/>
            <?php if ($en_post && !$validation['email']['is_valid']) {
                echo '<span>' . $validation['email']['err_msg'] . '</span>';
            } ?>

            <label><?= tr("Téléphone") ?> :</label>
            <input type="tel" id="tel" name="tel" required
                   class="<?= $en_post && !$validation['tel']['is_valid'] ? 'invalide' : '' ?>"
                   value="<?= $en_post ? $validation['tel']['value'] : '' ?>"/>
            <?php if ($en_post && !$validation['tel']['is_valid']) {
                echo '<span>' . $validation['tel']['err_msg'] . '</span>';
            } ?>

            <label><?= tr("Adresse postale") ?> :</label>
            <input type="adress" id="adress" name="adress" required
                   class="<?= $en_post && !$validation['adress']['is_valid'] ? 'invalide' : '' ?>"
                   value="<?= $en_post ? $validation['adress']['value'] : '' ?>"/>
            <?php if ($en_post && !$validation['adress']['is_valid']) {
                echo '<span>' . $validation['adress']['err_msg'] . '</span>';
            } ?>

            <label><?= tr("code postal") ?> :</label>
            <input type="text" id="cod_post" name="cod_post" required>
            <label>Code de promotion :</label>
            <input type="text" id="promo" name="promo" pattern="[A-Za-z0-9]{6}"
                   title="Le code de promotion contient six caractères alphanumériques."/>

            <a href="commande.php" onclick="">
                <button type="button"><?= tr("Commande") ?></button>
            </a>

        </form>

    </main>

<?php require_once 'views/page_bottom.php';










