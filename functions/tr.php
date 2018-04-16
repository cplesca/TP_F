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
    "Contacte"
    =>"Contact",
    "Nom&Prénom"
    =>"Last name & First name",
    "votre@couriel.com"
    =>"your@email.com",
    "Soumettre"
    =>"Submit",
    "Tappez votre message ici"
    =>"Write your message here",
    "S'il vous plaît remplir le formulaire pour vous inscrire sur notre site"
    =>"Please fill the form to register to our website",
    "Prénom"
    =>"First name",
    "Nom"
    =>"Last name",
    "Le prénom doit avoir au moins deux caractères."
    =>"Firstname must have at least tow characters.",
    "Le nom doit avoir au moins deux caractères."
    =>"Lastname must have at least tow characters.",
    "L'email n'est pas valide."
    =>"The email isn't valid.",
    "Notre histoire"
    =>"Our history",
    "Tout a commencé par un soir de février, lorsque Justin demanda à sa mère la recette de               caramel qu’elle faisait à noël chaque année. Il a ensuite commencé à en faire lui-même et à en                  vendre à ses proches, qui n’ont pas pu résister à la saveur alléchante qui a su faire danser                    leurs papilles gustatives. Par la suite, ayant vu le potentiel de la future entreprise, Tristan                 (ancien collègue de classe de Justin), avec son instinct de requin investisseur, est venu                       s’incruster au sein de la compagnie. Depuis, l’entreprise a constamment évolué dans le but de                   vous offrir son délicieux caramel qui donne des câlins à l’estomac de chaque personne qui le                    croise"
    =>"It all started on a February night, when Justin asked her mother about the caramel recipe she made at Christmas every year, and then started making it herself and selling it to her family, who did not could not resist the tantalizing flavor that made their taste buds dance, and after seeing the potential of the future company, Tristan (former classmate of Justin), with his instinct of investor shark, came The company has constantly evolved in order to offer you its delicious caramel that gives hugs to the stomach of each person who crosses it.",
    "Bienvenue chez MelGood"
    =>"Welcom to MelGood",
    "message"
    =>"message",
    "Envoyer nous vos commentaire ou question"
    =>"Send us your coments or question",
    "Le nom complet n'est pas valide."
    =>"The full name is not valid.",
    "L'adress n'est pas valide."
    =>"The address is invalid.",
    "Le message n'est pas valide."
    =>"the message is not valid",
    "Veuillez choisir la quantité,puis remplir vos renseignements "
    =>"Please choose the quantity and fill in your information",
    "Votre commande a ete ajouter dans notre base de donnees avec succes,Merci pour votre confiance."
    =>"Your order was added in our data base with succses,Thanq you for your trust. ",

    "Bien venu chez MelGood"
    => "Welcom to MelGood",
    "Nos distributeurs"
    => "Our distributors",
    "Chez MelGood, nous offrons du caramel à tartiner de qualité et fait à la main à                      Montréal. Notre mission est de redéfinir ce qu'est un bon caramel et d’ajouter de la saveur à                   chacun de vos repas"
    =>"At MelGood, we
     offer caramel
     quality spreads
     and handmade to
     Montreal. Our mission
     is to redefine what is
     a good caramel and add
     of flavor to each of
     your meals",

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

