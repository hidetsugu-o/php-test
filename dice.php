<?php

const SIDED = [1, 2, 3, 4, 5, 6];

class Dice {
    protected array $sided;
    protected int $number;

    public function __construct()
    {
        $this->sided = SIDED;
    }

    public function getSided() :array
    {
        return $this->sided;
    }

    public function roll() :void
    {
        $this->number = $this->sided[array_rand($this->sided)];
    }

    public function getNumber() :int
    {
        return $this->number;
    }
}