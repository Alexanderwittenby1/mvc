<?php

namespace App\Dice;

use PHPUnit\Framework\TestCase;

class DiceHandTest extends TestCase
{
    /**
      * Construct object and verify that the object has the expected
      * properties, use no arguments.
      */
    public function testAddDice(): void
    {
        $hand = new DiceHand();
        $die = new Dice();
        $hand->add($die);
        $this->assertInstanceOf("\App\Dice\DiceHand", $hand);

    }

    /**
    * Test the RollDice method.
    */
    public function testRollDice(): void
    {
        $hand = new DiceHand();
        $die = new Dice();
        $hand->add($die);
        $hand->roll();
        $res = $hand->getValues();
        $this->assertIsArray($res);
        $this->assertNotEmpty($res);

    }

    /**
     * Summary of testGetNumberOfDices
     * @return void
     */
    public function testGetNumberOfDices(): void
    {
        $hand = new DiceHand();
        $die = new Dice();
        $hand->add($die);
        $hand->add($die);
        $res = $hand->getNumberDices();
        $this->assertEquals(2, $res);

    }
    /**
     * Summary of testGetString
     * @return void
     */
    public function testGetString(): void
    {
        $hand = new DiceHand();
        $die = new Dice();
        $hand->add($die);
        $hand->roll();
        $res = $hand->getString();
        $this->assertIsArray($res);
        $this->assertNotEmpty($res);

        foreach($res as $value) {
            $this->assertIsString($value);
        }
    }

}
