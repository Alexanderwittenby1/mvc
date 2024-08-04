<?php

namespace App\CardGame;

class Deck
{
    /**
     * @var Card[]
     */
    private array $cards = [];

    public function __construct()
    {
        $suits = ['♠', '♥', '♦', '♣'];
        $values = ['2', '3', '4', '5', '6', '7', '8', '9', '10', '♖', '♕', '♔', 'A'];

        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $this->cards[] = new Card($suit, $value);
            }
        }
        shuffle($this->cards);
    }

    public function shuffle(): void
    {
        shuffle($this->cards);
    }

    /**
     * Draws the specified number of cards from the deck.
     *
     * @param int $number The number of cards to draw.
     * @return Card[] The drawn cards.
     */
    public function draw(int $number = 1): array
    {
        return array_splice($this->cards, 0, $number);
    }

    /**
     * Returns the current cards in the deck.
     *
     * @return Card[] The cards in the deck.
     */
    public function getCards(): array
    {
        return $this->cards;
    }

    public function getRemainingCards(): int
    {
        return count($this->cards);
    }

    public function count(): int
    {
        return count($this->cards);
    }

    /**
     * Returns the sorted cards in the deck.
     *
     * @return Card[] The sorted cards in the deck.
     */
    public function getSortedCards(): array
    {
        usort($this->cards, function (Card $cardA, Card $cardB) {
            $suitOrder = ['♠', '♥', '♦', '♣'];
            $valueOrder = ['2', '3', '4', '5', '6', '7', '8', '9', '10', '♖', '♕', '♔', 'A'];

            $suitComparison = array_search($cardA->getSuit(), $suitOrder) - array_search($cardB->getSuit(), $suitOrder);
            if ($suitComparison === 0) {
                return array_search($cardA->getValue(), $valueOrder) - array_search($cardB->getValue(), $valueOrder);
            }
            return $suitComparison;
        });

        return $this->cards;
    }
}
