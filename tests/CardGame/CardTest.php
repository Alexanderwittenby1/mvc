<?php

use PHPUnit\Framework\TestCase;
use App\CardGame\Card;

/**
 * Test case for the Card class.
 */
class CardTest extends TestCase
{
    /**
     * Tests that the Card constructor correctly creates a Card object.
     */
    public function testConstructor(): void
    {
        $card = new Card('Hearts', 'Ace');
        $this->assertInstanceOf(Card::class, $card);
    }

    /**
     * Tests the getSuit method of the Card class.
     */
    public function testGetSuit(): void
    {
        $card = new Card('Hearts', 'Ace');
        $this->assertEquals('Hearts', $card->getSuit());
    }

    /**
     * Tests the getValue method of the Card class.
     */
    public function testGetValue(): void
    {
        $card = new Card('Hearts', 'Ace');
        $this->assertEquals('Ace', $card->getValue());
    }

    /**
     * Tests the __toString method of the Card class.
     */
    public function testToString(): void
    {
        $card = new Card('Hearts', 'Ace');
        $this->assertEquals('[Ace of Hearts]', (string) $card);
    }
}
