<?php

require_once 'Chicken.php';
require_once 'Cow.php';

$animals = [];
for($i = 0; $i < 10; $i++)
    $animals[] = new Cow();
for($i = 0; $i < 20; $i++)
    $animals[] = new Chicken();

return $animals;