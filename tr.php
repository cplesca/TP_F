<?php
$traduction = array(
    "Bien venu chez MelGood" => "Welcom to MelGood",
    "Nos distributeurs" => "Our distributors",
);
var_dump($_GET);
$lang = 'fr';
// Reception du GET
if (array_key_exists('lang',$_GET)) {
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


