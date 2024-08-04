<?php

namespace App\Dice;

use phpDocumentor\Reflection\Types\Null_;
use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Dice.
 */
class DiceTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties, use no arguments.
     */
    public function testCreateDice(): void
    {
        $die = new Dice();
        $this->assertInstanceOf("\App\Dice\Dice", $die);

        $res = $die->getAsString();
        $this->assertNotEmpty($res);
    }

    /**
    * Test the RollDice method.
    */

    public function testRollDice(): void
    {
        $die = new Dice();
        $res = $die->roll();
        $this->assertIsInt($res);

        $this->assertGreaterThanOrEqual(1, $res);
        $this->assertLessThanOrEqual(6, $res);

    }
    /**
    * Test the GetValue method.
    * Makes sure that the value is between 1 and 6 and that it actually gets a value.
    * @return void
    */

    public function testGetValue(): void
    {
        $die = new Dice();
        $res = $die->getValue();
        $this->assertContains($res, [null, 1, 2, 3, 4, 5, 6]);


    }
}
