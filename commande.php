<?php
const PAGE_NAME = 'Accueil';

require_once 'functions/tr.php';

require_once 'views/page_top.php';

$en_post = $_SERVER['REQUEST_METHOD'] === 'POST'; //Indique si on est en réception
$validation = array(
    'nom_complet' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => 'Firstname must have at least 2 characters.',
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
    $validation['nom_complet']['value'] = filter_input(INPUT_POST, 'nom_complet', FILTER_SANITIZE_STRING);
    //Minimum 2 caractères
    $validation['nom_complet']['is_valid'] = strlen($validation['nom_complet']['value']) >= 2;
    //email
    $validation['email']['value'] = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    //filter the characters in email
    $validation['email']['is_valid'] = (false !== filter_var($validation['email']['value'],  FILTER_VALIDATE_EMAIL));

}

?>
<div>
    <a class = "lang" href = "commande.php?lang=<?= $lang==='fr'? 'en' : 'fr' ?> "><?= $lang==='fr'? 'EN' : 'FR' ?></a>
</div>
<main>
    <div style="padding-left:16px">
        <h2><?= tr("Livraison") ?></h2>
    </div>
    <form>
        <label><?= tr("Quantitée") ?> :</label>
        <input type="number" id="quantiter" name="quantiter" value="1" min="1" max="100" required>

        <label><?= tr("Nom Complet") ?>:</label>
        <input type="text" id="nom_complet" name="nom_complet"  required
               class="<?= $en_post && !$validation['nom_complet']['is_valid'] ? 'invalide' : '' ?>"
               value="<?= $en_post ? $validation['nom_complet']['value'] : '' ?>"/>
        <?php if($en_post && !$validation['nom_complet']['is_valid']){
            echo '<span>' . $validation['nom_complet']['err_msg'] . '</span>';
        }
        ?>
        <label><?= tr("Couriel") ?> :</label>
        <input type="email" id="email_addr" name="email_addr" required
               class="<?= $en_post && !$validation['email']['is_valid'] ? 'invalide' : '' ?>"
               value="<?= $en_post ? $validation['email']['value'] : '' ?>"
        />
        <?php if($en_post && !$validation['email']['is_valid'] || ! check_mail($validation['email']['value'])){
            echo '<span>' . $validation['email']['err_msg'] . '</span>';
        }
        ?>
        <label><?= tr("Téléphone") ?> :</label>
        <input type="tel" id="tel" name="tel" required>

        <label><?= tr("Adresse postale") ?> :</label>
        <input type="adress" id="aadress" name="adress" required>

        <label><?= tr("code postal") ?> :</label>
        <input type="text" id="cod_post" name="cod_post"  required>
        <label>Code de promotion :</label>
        <input type="text" id="promo" name="promo" pattern="[A-Za-z0-9]{6}"
               title="Le code de promotion contient six caractères alphanumériques.">

        <a href = "commande.php" onclick=""><button type="button"><?= tr("Commande")            ?></button></a>

    </form>

</main>

<?php require_once 'views/page_bottom.php';










