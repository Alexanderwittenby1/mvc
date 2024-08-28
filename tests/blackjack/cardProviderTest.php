<?php

use PHPUnit\Framework\TestCase;
use App\Service\CardProvider;
class cardProviderTest extends TestCase
{   

    public function testDrawCard(): void
    {
        $cardProvider = new CardProvider();
        $card = $cardProvider->drawCard();
        $this->assertContains($card->getSuit(), ['Hearts', 'Diamonds', 'Clubs', 'Spades']);
        
    }
   

}