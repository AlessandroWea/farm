<?php

require_once 'Animal.php';

class Cow extends Animal
{
    public function collect(array &$box) : void
    {
        $box['milk'] += mt_rand(8,12);
    }
}