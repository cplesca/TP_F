<?php
$traduction = array(
    "Acceuil"
    => "Home",
    "Commande"
    => "Order",
    "Contacter nous"
    =>"Contact",
    "Nous contacter"
    =>"Contact us",
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


