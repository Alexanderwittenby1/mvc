<?php

namespace App\CardGame;

class Deck
{
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
    }

    public function shuffle(): void
    {
        shuffle($this->cards);
    }



    public function draw(int $number = 1): array
    {
        return array_splice($this->cards, 0, $number);
    }

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

    public function getSortedCards(): array
    {
        usort($this->cards, function (Card $a, Card $b) {
            $suitOrder = ['♠', '♥', '♦', '♣'];
            $valueOrder = ['2', '3', '4', '5', '6', '7', '8', '9', '10', '♖', '♕', '♔', 'A'];

            $suitComparison = array_search($a->getSuit(), $suitOrder) - array_search($b->getSuit(), $suitOrder);
            if ($suitComparison === 0) {
                return array_search($a->getValue(), $valueOrder) - array_search($b->getValue(), $valueOrder);
            }
            return $suitComparison;
        });

        return $this->cards;
    }
}
