<?php

use PHPUnit\Framework\TestCase;
use App\Entity\Card;
use App\Entity\Hand;

class blackJackCardTest extends TestCase
{
    public function testCardCreation() : void
    {
        $card = new Card();
        $card->setSuit('Hearts');
        $card->setRank('A');
        $this->assertInstanceOf(Card::class, $card);
        $this->assertEquals('Hearts', $card->getSuit());
        
    }

    public function testGetId () : void
    {
        $card = new Card();
        $card->setSuit('Hearts');
        $card->setRank('A');
        $this->assertNull($card->getId());
    }


    public function testGetRank () : void
    {
        $card = new Card();
        $card->setSuit('Hearts');
        $card->setRank('A');
        $this->assertEquals('A', $card->getRank());
    }

   

    

    

}