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

    public function testSided()
    {
        $this->assertCount(6, $this->dice->getSided());
        for ($i = 1; $i <= 6; $i++) {
            $this->assertContains($i, $this->dice->getSided());
        }

        return $this->dice;
    }

    public function testMillionRoll()
    {   
        for ($i = 1; $i <= 1000000; $i++)
        {
            $this->dice->roll();
            $this->assertTrue(1 <= $this->dice->getNumber() && 1 <= $this->dice->getNumber());
        }
    }
}
