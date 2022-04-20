<?php

require_once 'Animal.php';

class Farm
{
    private array $animals;
    private array $box;

    static public $lastId = 1;

    public function __construct(array $animals, array $box)
    {
        foreach($animals as $animal){
            $this->add($animal);
        }
        $this->box = $box; 
    }

    public function add(Animal $animal) : void
    {
        $animal->setId(self::$lastId++);
        $this->animals[] = $animal;
    }

    public function collect() : void
    {
        foreach($this->animals as $animal){
            $animal->collect($this->box);
        }
    }

    public function getAnimals() : array
    {
        return $this->animals;
    }

    public function getBox() : array
    {
        return $this->box;
    }
}