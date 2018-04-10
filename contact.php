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
        <h2><?= tr("Contactez nous") ?></h2>
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

                        <?php if($en_post && !$validation['email']['is_valid']){
                            echo '<span>' . $validation['email']['err_msg'] . '</span>';
                        }
                        ?>
                    </div>
                </fieldset>
                <input type="submit" value="Submit">
            </form>
           </div>

</main>

<?php require_once 'views/page_bottom.php';
