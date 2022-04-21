<?php

namespace Alewea\Farm\Animals;

class Chicken extends Animal
{
    public function collect(array &$box) : void
    {
        $box['eggs'] += mt_rand(0,1);
    }
}