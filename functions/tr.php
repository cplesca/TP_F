<?php
$traduction = array(
    "Acceuil"
    => "Home",
    "Commande"
    => "Order",
    "Contactez nous"
    =>"Contact us",
    "Plan du Site"
    =>"Site Map",
    "Nous contacter"
    =>"Contact us",
    "Livraison"
    =>"Shiping",
    "Nom Complet"
    =>"Full Name",
    "Couriel"
    =>"E_mail",
    "Adresse postale"
    =>"address",
    "code postal"
    =>"ZIP code",
    "Téléphone"
    =>"Phone",
    "Quantitée"
    =>"Quantity",
    "Passer la Commande"
    =>"Order",
    "Téléphone"
    =>"Phone",
    "Contactez nous"
    =>"Contact us",
    "Nom&Prénom"
    =>"Last name & First name",
    "votre@couriel.com"
    =>"your@email.com",
    "Soumettre"
    =>"Submit",
    "Tappez votre message ici"
    =>"Write your message here",

    "Bien venu chez MelGood"
    => "Welcom to MelGood",
    "Nos distributeurs"
    => "Our distributors",
    "Chez MelGood, nous 
     offrons du caramel
     à tartiner de qualité
     et fait à la main à 
     Montréal. Notre mission 
     est de redéfinir ce qu'est
     un bon caramel et d’ajouter
     de la saveur à chacun de
     vos repas"=>
     "At MelGood, we
     offer caramel
     quality spreads
     and handmade to
     Montreal. Our mission
     is to redefine what is
     a good caramel and add
     of flavor to each of
     your meals"

);
$lang = 'fr';
// Reception du GET
if (array_key_exists('lang',$_GET) && ($_GET['lang'] === 'fr' || $_GET['lang'] === 'en') ) {
    $lang = $_GET['lang'];
};
function tr($s){
    global $lang, $traduction;
    if ($lang === "fr") {
        return $s;
    } else {
        return $traduction[$s];
    }
}
?>


