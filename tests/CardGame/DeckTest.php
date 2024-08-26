<?php

use PHPUnit\Framework\TestCase;
use App\CardGame\Deck;

/**
* Test that a Deck object is created successfully.
*
* @return void
*/

class DeckTest extends TestCase
{
    /**
     * Test that a Deck object is created successfully.
     *
     * @return void
     */
    public function testCreateDeck(): void
    {
        $deck = new Deck();
        $this->assertInstanceOf(Deck::class, $deck);
    }

    /**
     * Test that the shuffle method changes the order of the cards.
     *
     * @return void
     */
    public function testShuffle(): void
    {
        $deck = new Deck();
        $cards = $deck->getCards();
        $deck->shuffle();
        $this->assertNotEquals($cards, $deck->getCards());
    }

    /**
     * Test that drawing cards works correctly.
     *
     * @return void
     */
    public function testDraw(): void
    {
        $deck = new Deck();
        $cards = $deck->getCards();
        $drawnCards = $deck->draw(5);
        $this->assertCount(5, $drawnCards);
        $this->assertCount(count($cards) - 5, $deck->getCards());
    }

    /**
     * Test that the number of remaining cards is correct after drawing.
     *
     * @return void
     */
    public function testGetRemainingCards(): void
    {
        $deck = new Deck();
        $deck->draw(5);
        $this->assertEquals(47, $deck->getRemainingCards());
    }

    /**
     * Test that the count method returns the correct number of cards.
     *
     * @return void
     */
    public function testCount(): void
    {
        $deck = new Deck();
        $this->assertEquals(52, $deck->count());
    }

    /**
     * Test that the getSortedCards method returns the cards in sorted order.
     *
     * @return void
     */
    public function testGetSortedCards(): void
    {
        $deck = new Deck();
        $sortedCards = $deck->getSortedCards();
        $this->assertCount(52, $sortedCards);
        $this->assertEquals('[2 of ♠]', (string) $sortedCards[0]);
        $this->assertEquals('[A of ♣]', (string) $sortedCards[51]);
    }
}
