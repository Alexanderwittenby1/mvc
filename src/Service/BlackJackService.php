<?php

// src/Service/BlackJackService.php

namespace App\Service;

use App\Entity\Card;
use App\Entity\Hand;
use App\Entity\Players;
use Doctrine\ORM\EntityManagerInterface;

class BlackJackService
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    // src/Service/BlackJackService.php
    public function startNewRound(Players $player, int $numberOfHands): void
    {
        // Rensa kort från tidigare rundor
        $playerHands = $this->em->getRepository(Hand::class)->findBy(['player' => $player]);
        $dealerHand = $this->em->getRepository(Hand::class)->findOneBy(['player' => null]);

        // Ta bort gamla kort och händer
        foreach ($playerHands as $hand) {
            foreach ($hand->getCards() as $card) {
                $hand->removeCard($card);
                $this->em->remove($card);
            }
            $this->em->remove($hand);
        }

        if ($dealerHand) {
            foreach ($dealerHand->getCards() as $card) {
                $dealerHand->removeCard($card);
                $this->em->remove($card);
            }
            $this->em->remove($dealerHand);
        }

        $this->em->flush();

        // Skapa det angivna antalet händer för spelaren
        for ($i = 0; $i < $numberOfHands; $i++) {
            $playerHand = new Hand();
            $playerHand->setPlayer($player);
            $this->em->persist($playerHand);
            $this->dealInitialCards($playerHand);
        }

        // Skapa ny hand för dealern
        $dealerHand = new Hand();
        $dealerHand->setPlayer(null); // null signifies dealer
        $this->em->persist($dealerHand);
        $this->dealInitialCards($dealerHand);

        $this->em->flush();
    }

    public function clearPreviousHands(Players $player): void
    {
        $hands = $this->em->getRepository(Hand::class)->findBy(['player' => $player]);

        foreach ($hands as $hand) {
            $this->em->remove($hand);
        }

        $this->em->flush();
    }


    public function dealInitialCards(Hand $hand): void
    {
        // Dra två kort till handen
        $card1 = $this->drawCard();
        $card2 = $this->drawCard();

        // Lägg till korten i handen
        $hand->addCard($card1);
        $hand->addCard($card2);

        // Spara korten i databasen
        $this->em->persist($card1);
        $this->em->persist($card2);
    }


    public function hit(Hand $hand): void
    {
        $card = $this->drawCard();
        $hand->addCard($card);
        $this->em->persist($hand);
        $this->em->flush();
    }

    public function stand(Players $player): void
    {
        $playerHands = $this->em->getRepository(Hand::class)->findBy(['player' => $player]);
        $dealerHand = $this->em->getRepository(Hand::class)->findOneBy(['player' => null]);

        if ($dealerHand) {
            $this->dealerPlay($dealerHand);
        }

        foreach ($playerHands as $hand) {
            $playerScore = $this->calculateHandValue($hand);
            $dealerScore = $this->calculateHandValue($dealerHand);

            $result = $this->determineWinner($playerScore, $dealerScore);

            if ($result === 'Player wins') {
                $player->setBankAccount($player->getBankAccount() + 10);
            } elseif ($result === 'Dealer wins') {
                $player->setBankAccount($player->getBankAccount() - 10);
            }

            $this->em->persist($player);
        }

        $this->em->flush();
    }

    private function dealerPlay(Hand $dealerHand): void
    {
        while ($this->calculateHandValue($dealerHand) < 17) {
            $this->hit($dealerHand);
        }

        $this->em->persist($dealerHand);
        $this->em->flush();
    }

    private function drawCard(): Card
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

    public function calculateHandValue(Hand $hand): int
    {
        $value = 0;
        $aces = 0;

        foreach ($hand->getCards() as $card) {
            $rank = $card->getRank();
            if (is_numeric($rank)) {
                $value += (int)$rank;
            } elseif (in_array($rank, ['J', 'Q', 'K'])) {
                $value += 10;
            } elseif ($rank === 'A') {
                $aces++;
                $value += 11;
            }
        }

        while ($value > 21 && $aces > 0) {
            $value -= 10;
            $aces--;
        }

        return $value;
    }

    public function determineWinner(int $playerScore, int $dealerScore): string
    {
        if ($playerScore > 21) {
            return 'Dealer wins';
        }

        if ($dealerScore > 21 || $playerScore > $dealerScore) {
            return 'Player wins';
        }

        if ($playerScore < $dealerScore) {
            return 'Dealer wins';
        }

        return 'Draw';
    }
}
