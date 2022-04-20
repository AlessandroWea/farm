<?php

require_once 'Cow.php';
require_once 'Chicken.php';
require_once 'Farm.php';

class FarmLogger
{
    private Farm $farm;

    private int $chickenCount;
    private int $cowCount;

    public function __construct(Farm $farm)
    {
        $this->farm = $farm;
        $this->countAnimals();
    }

    public function update()
    {
        $this->countAnimals();
    }

    private function countAnimals()
    {
        $this->chickenCount = 0;
        $this->cowCount = 0;

        foreach($this->farm->getAnimals() as $animal){
            if($animal instanceof Cow){
                $this->cowCount++;
            }
            else if($animal instanceof Chicken){
                $this->chickenCount++;
            }
        }
    }

    public function showAnimals()
    {
        echo '--- Animals ---' . "\n";
        echo "Chickens: " . $this->chickenCount . "\n";
        echo "Cows: " . $this->cowCount . "\n";
        echo '----------------' . "\n";
    }
    
    public function showProducts()
    {
        echo '--- Products ---' . "\n";
        echo 'Milk: ' . $this->farm->getBox()['milk'] . ' litres' . "\n";
        echo 'Eggs: ' . $this->farm->getBox()['eggs'] . ' shtuk' . "\n";
        echo '-----------------' . "\n";
    }
}