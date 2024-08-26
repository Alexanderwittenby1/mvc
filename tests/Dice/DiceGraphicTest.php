<?php

namespace App\Dice;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Dice.
 */
class DiceGraphicTest extends TestCase
{
    /**
      * Construct object and verify that the object has the expected
      * properties, use no arguments.
      * @return void
      */
    public function testCreateDice(): void
    {
        $die = new DiceGraphic();
        $this->assertInstanceOf("\App\Dice\DiceGraphic", $die);
    }


    /**
     * Test the GetAsString method.
     * @return void
     */
    public function testGetAsString(): void
    {
        $die = new DiceGraphic();
        $die->roll();
        $res = $die->getAsString();
        $this->assertIsString($res);

    }




}
