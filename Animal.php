<?php

abstract class Animal
{
    private int $id;

    public function __construct()
    {
        $this->id = 0;   
    }

    public function setId(int $id) : void
    {
        $this->id = $id;
    }

    public function getId() : int
    {
        return $this->id;
    }

    abstract function collect(array &$box) : void;
}