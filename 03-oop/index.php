<?php
require_once(
        "classes/Plante.php"
    );
require_once(
    "classes/Voiture.php"
);
require_once(
    "classes/Arbre.php"
);

$arbre = new Arbre("rouge", 4);
$arbre->pousser();
$arbre->pousser();
$arbre->pousser();
var_dump($arbre);

/*
$voiture = new Voiture("rouge");
$voiture2 = new Voiture("bleue");
$voiture3 = new Voiture("jaune");

$voiture2->nbRoues = 4;

$voiture2->rouler();
$voiture3->rouler();

var_dump($voiture);
var_dump($voiture2);
var_dump($voiture3);
*/
?>
