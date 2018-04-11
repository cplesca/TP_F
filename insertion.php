<?php
const PAGE_NAME = 'Accueil';

require_once 'functions/tr.php';

require_once 'views/page_top.php';
//ouverture dùne connexion a la bdd agenda
$objetPDO= new PDO('mysql:host=localhost;dbname=agenda','root','');

//preparation de la requete d'insertion (SQL)
$pdoStart = $objetPDO->prepare('INSERT INTO commende VALUE(NULL, :quantity, :full_name, :mail, :phone, :address, :zipp_code)');

//on lie chaque marqueur a une valeur
$pdoStart->bindValue('quantity',$_POST['quantity'],PDO::PARAM_STR);
$pdoStart->bindValue('full_name',$_POST['full_name'],PDO::PARAM_STR);
$pdoStart->bindValue('mail',$_POST['mail'],PDO::PARAM_STR);
$pdoStart->bindValue('phone',$_POST['phone'],PDO::PARAM_STR);
$pdoStart->bindValue('address',$_POST['address'],PDO::PARAM_STR);
$pdoStart->bindValue('zipp_code',$_POST['zipp_code'],PDO::PARAM_STR);

//executionde la requete prepare
$insertIsOk = $pdoStart->execute();

if ($insertIsOk){
    $message = 'Le commend a ete ajouter dans la bdd';
} else {
    $message = 'Echec de l\insertion';
}
?>

    <main>
        <div>
            <h1>Insertion de commende</h1>
        </div>
    </main>

<?php require_once 'views/page_bottom.php';
