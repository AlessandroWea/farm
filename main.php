<?php

require_once 'vendor/autoload.php';

use Alewea\Farm\Farm;
use Alewea\Farm\FarmLogger;
use Alewea\Farm\Animals\Chicken;
use Alewea\Farm\Animals\Cow;

//initialisation of animals
$animals = [];
for($i = 0; $i < 10; $i++)
    $animals[] = new Cow();
for($i = 0; $i < 20; $i++)
    $animals[] = new Chicken();

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