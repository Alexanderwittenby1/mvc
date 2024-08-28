<?php

namespace App\Service;

use App\Entity\Card;

class CardProvider
{
    public function drawCard(): Card
    {
        $suits = ['Hearts', 'Diamonds', 'Clubs', 'Spades'];
        $ranks = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'];

        $suit = $suits[array_rand($suits)];
        $rank = $ranks[array_rand($ranks)];

        $card = new Card();
        $card->setSuit($suit);
        $card->setRank($rank);

        return $card;
    }
}
