<?php

use PHPUnit\Framework\TestCase;
use App\Entity\Card;
use App\Entity\Hand;
use App\Entity\Players;

class blackJackHandTest extends TestCase
{
   public function testHandCreation() : void
    {
        $hand = new Hand();
        $this->assertInstanceOf(Hand::class, $hand);
    }
    
    public function testGetId() : void {
        $hand = new Hand();
        $this->assertNull($hand->getId());
    }

    public function testGetPlayer() : void {
        $hand = new Hand();
        $this->assertNull($hand->getPlayer());
    }

    public function testSetPlayer() : void {
        $hand = new Hand();
        $player = new Players();
        $hand->setPlayer($player);
        $this->assertEquals($player, $hand->getPlayer());
    }


    public function testGetCards() : void {
        $hand = new Hand();
        $this->assertEmpty($hand->getCards());
    }


    public function testAddCard() : void {
        $hand = new Hand();
        $card = new Card();
        $hand->addCard($card);
        $this->assertContains($card, $hand->getCards());
    }


    public function testRemoveCard() : void {
        $hand = new Hand();
        $card = new Card();
        $hand->addCard($card);
        $hand->removeCard($card);
        $this->assertNotContains($card, $hand->getCards());
    }
    

    public function testGetIsStand() : void {
        $hand = new Hand();
        $this->assertFalse($hand->getIsStand());
    }

    public function testSetIsStand() : void {
        $hand = new Hand();
        $hand->setIsStand(true);
        $this->assertTrue($hand->getIsStand());
    }

}