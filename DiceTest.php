<?php

require "dice.php";
use PHPUnit\Framework\TestCase;

class DiceTest extends TestCase
{
    protected Dice $dice;

    protected function setUp() :void 
    {
        $this->dice = new Dice();
    }

    public function testInstanceOf() 
    {
        $this->assertInstanceOf(Dice::class, $this->dice);
    }
}
