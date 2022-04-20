<?php

require_once 'Farm.php';
require_once 'FarmLogger.php';

//initialisation of animals
$animals = include 'first_animals.php';

//initialization of product box
$box = [
    'eggs' => 0,
    'milk' => 0,
];

$farm = new Farm($animals, $box);
$farmLogger = new FarmLogger($farm);

$farmLogger->showAnimals();

//collect products for a week
for($i = 0; $i < 7; $i++){
    $farm->collect();
}

$farmLogger->showProducts();

//buying new animals
$farm->add(new Chicken());
$farm->add(new Chicken());
$farm->add(new Chicken());
$farm->add(new Chicken());
$farm->add(new Chicken());
$farm->add(new Cow());
$farmLogger->update();

$farmLogger->showAnimals();

//collecting for another week
for($i = 0; $i < 7; $i++){
    $farm->collect();
}

$farmLogger->showProducts();