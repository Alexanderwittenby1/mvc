<?php

use PHPUnit\Framework\TestCase;
use App\Entity\Card;
use App\Entity\Hand;
use App\Entity\Players;

class blackJackPlayersTest extends TestCase
{   

    public function testPlayersCreation() : void
    {
        $players = new Players();
        $this->assertInstanceOf(Players::class, $players);
    }


    public function testGetId() : void {
        $players = new Players();
        $this->assertNull($players->getId());
    }


    public function testGetName() : void {
        $players = new Players();
        $this->assertNull($players->getName());
    }

    public function testSetName() : void {
        $players = new Players();
        $players->setName("Test Name");
        $this->assertEquals("Test Name", $players->getName());
    }

    public function testGetHands() : void {
        $players = new Players();
        $this->assertEmpty($players->getHands());
    }

    public function testAddHand() : void {
        $players = new Players();
        $hand = new Hand();
        $players->addHand($hand);
        $this->assertContains($hand, $players->getHands());
    }

    public function testRemoveHand() : void {
        $players = new Players();
        $hand = new Hand();
        $players->addHand($hand);
        $players->removeHand($hand);
        $this->assertNotContains($hand, $players->getHands());
    }

    public function testGetBankAccount() : void {
        $players = new Players();
        $players->setBankAccount(1000);
        $this->assertEquals(1000, $players->getBankAccount());
    }
    public function testSetBankAccount() : void {
        $players = new Players();
        $players->setBankAccount(500);
        $this->assertEquals(500, $players->getBankAccount());
    }


   

}