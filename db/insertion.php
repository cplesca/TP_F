<?php

//ouverture dùne connexion a la bdd agenda
$objetPdo= new PDO('mysql:host=localhost;dbname=agenda','root','');

//preparation de la requete d'insertion (SQL)
$pdoStat = $objetPdo->prepare('INSERT INTO commende VALUE (NULL, :quantity, :full_name, :mail, :phone, :address, :zipp_code)');

//on lie chaque marqueur a une valeur
$pdoStat->bindValue(':quantity',$_POST['quantiter'],PDO::PARAM_STR);
$pdoStat->bindValue(':full_name',$_POST['nom_complet'],PDO::PARAM_STR);
$pdoStat->bindValue(':mail',$_POST['email_addr'],PDO::PARAM_STR);
$pdoStat->bindValue(':phone',$_POST['tel'],PDO::PARAM_STR);
$pdoStat->bindValue(':address',$_POST['adress'],PDO::PARAM_STR);
$pdoStat->bindValue(':zipp_code',$_POST['cod_post'],PDO::PARAM_STR);

//executionde la requete prepare
$insertIsOk = $pdoStat->execute();

if ($insertIsOk){
    $message = "Votre commande a ete ajouter dans notre base de donnees avec succes,Merci pour votre confiance.";

} else {
        $message = 'Echec de l\insertion';

}

?>

    <main>
        <div>
            <h1>Insertion de commande</h1>
            <p><?php echo $message ?></p>
        </div>
    </main>


