<?php
require_once ('views/page_top.php');
$en_post = $_SERVER['REQUEST_METHOD'] === 'POST'; //Indique si on est en réception
$validation = array(
    'firstname' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => tr("Le prénom doit avoir au moins deux caractères."),
    ),
    'lastname' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => tr("Le nom doit avoir au moins deux caractères."),
    ),
    'email' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => tr("L'email n'est pas valide.") ,
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

<body>

<div>
    <a class = "lang" href = "contact.php?lang=<?= $lang==='fr'? 'en' : 'fr' ?> "><?= $lang==='fr'? 'EN' : 'FR' ?></a>
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

        <form method="post" id="register">
            <h2><?= tr("Contactez nous") ?></h2>

            <fieldset>
                    <legend><?= tr( "S'il vous plaît remplir le formulaire pour vous inscrire sur notre site") ?></legend>
                    <div>
                        <label for="firstname"><?= tr("Prénom") ?></label>
                        <input type="text" name="firstname" id="firstname"  placeholder=<?= tr("Prénom") ?>
                               class="<?= $en_post && !$validation['firstname']['is_valid'] ? 'invalide' : '' ?>"
                               value="<?= $en_post ? $validation['firstname']['value'] : '' ?>"/>
                        <?php if($en_post && !$validation['firstname']['is_valid']){
                            echo '<span>' . $validation['firstname']['err_msg'] . '</span>';
                        }

                        ?>
                    </div>
                    <div>
                        <label for="lastname"><?= tr("Nom") ?></label>
                        <input type="text" name="lastname" id="lastname" placeholder=<?= tr("Nom") ?>
                               class="<?= $en_post && !$validation['lastname']['is_valid'] ? 'invalide' : '' ?>"
                               value="<?= $en_post ? $validation['lastname']['value'] : '' ?>"/>
                        <?php if($en_post && !$validation['lastname']['is_valid']){
                            echo '<span>' . $validation['lastname']['err_msg'] . '</span>';
                        }

                        ?>
                    </div>
                    <div>
                        <label for="email"><?= tr("Couriel") ?></label>
                        <input type="text" name="email" id="email" placeholder=<?= tr("Couriel") ?>
                               class="<?= $en_post && !$validation['email']['is_valid'] ? 'invalide' : '' ?>"
                               value="<?= $en_post ? $validation['email']['value'] : '' ?>"
                        />

                        <?php if($en_post && !$validation['email']['is_valid']){
                            echo '<span>' . $validation['email']['err_msg'] . '</span>';
                        }
                        ?>
                    </div>
                </fieldset>
                <input type="submit" value=<?= tr("Soumettre") ?>>
            </form>
           </div>

</main>

<?php require_once 'views/page_bottom.php';
