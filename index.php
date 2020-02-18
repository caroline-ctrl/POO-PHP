<?php

include('Ingredients.php');
include('Appareil.php');
include('Ustensile.php');
include('Recette.php');

$ingredients = [
    $chocolat = new Ingredients("chocolat", 250, "gr"),
    $sucre = new Ingredients("sucre", 100, "gr"),
    $oeuf = new Ingredients("oeufs", 4, "unité"),
    $sel = new Ingredients("sel", 5, "gr")
];

$ustensiles = [
    $saladier = new Ustensile("saladier", "contenir", "inox"),
    $fouet = new Ustensile("fouet", "melange", "inox"),
    $casserole = new Ustensile("casserole", "chauffer", "inox")
];

$appareils = [
    $frigo = new Appareil("frigo", "refroidir"),
    $batteur = new Appareil("batteur", "melanger"),
    $gaziniere = new Appareil("gaziniere", "cuit")
];


$mousseChoco = new Recette($ingredients, $ustensiles, $appareils);

foreach($mousseChoco->getIngredients() as $ingredient){
    echo 'Vous aurez besoin de ' . $ingredient->getQuantity() . ' ' . $ingredient->getMesure() . ' de ' . $ingredient->getName() . '. <br/>';
}

foreach($mousseChoco->getUstensiles() as $ustensile){
    echo 'Pour faire la recette vous aurez besoin de ' . $ustensile->getName() . ' qui servira a ' . $ustensile->getUtility() . '.<br>';
}

foreach($mousseChoco->getAppareils() as $appareil){
    echo 'Appareil necessaire : ' . $appareil->getName() . ' pour ' . $appareil->getUtility() . '.<br/>';
}

// var_dump($mousseChoco->getUstensiles());
// var_dump($mousseChoco->getAppareils());