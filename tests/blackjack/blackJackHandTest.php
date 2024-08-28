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

    

}