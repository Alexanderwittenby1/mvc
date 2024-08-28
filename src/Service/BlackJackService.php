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
    private $cardProvider;
    private $handManager;

    public function __construct(EntityManagerInterface $em, CardProvider $cardProvider, HandManager $handManager)
    {
        $this->em = $em;
        $this->cardProvider = $cardProvider;
        $this->handManager = $handManager;
    }

    public function startNewRound(Players $player, int $numberOfHands): void
    {
        $playerHands = $this->em->getRepository(Hand::class)->findBy(['player' => $player]);
        $dealerHand = $this->em->getRepository(Hand::class)->findOneBy(['player' => null]);

        foreach ($playerHands as $hand) {
            $this->handManager->clearHand($hand);
        }

        if ($dealerHand) {
            $this->handManager->clearHand($dealerHand);
        }

        $this->em->flush();

        for ($i = 0; $i < $numberOfHands; $i++) {
            $playerHand = new Hand();
            $playerHand->setPlayer($player);
            $this->em->persist($playerHand);
            $this->dealInitialCards($playerHand);
        }

        $dealerHand = new Hand();
        $dealerHand->setPlayer(null); 
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
       
        $card1 = $this->cardProvider->drawCard();
        $card2 = $this->cardProvider->drawCard();

        
        $hand->addCard($card1);
        $hand->addCard($card2);

        
        $this->em->persist($card1);
        $this->em->persist($card2);
    }

    public function hit(Hand $hand): void
    {
        $card = $this->cardProvider->drawCard();
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
