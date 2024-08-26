<?php

namespace App\CardGame;

use App\CardGame\Player;
use App\CardGame\Deck;

class Game
{
    private Player $player;
    private Player $dealer;
    private Deck $deck;

    public function __construct()
    {
        $this->deck = new Deck();
        $this->player = new Player();
        $this->dealer = new Player();
        $this->startGame();
    }

    public function startGame(): void
    {
        $this->deck->shuffle();


    }
    public function drawCardForPlayer(): void
    {
        $this->player->drawCard($this->deck);
    }

    public function drawCardForDealer(): void
    {
        $this->dealer->drawCard($this->deck);
    }



    public function dealerTurn(): void
    {
        while ($this->dealer->getScore() < 17) {
            $this->dealer->drawCard($this->deck);
        }
    }

    public function determineWinner(): string
    {
        if ($this->player->isBusted()) {
            return 'Dealer wins!';
        }

        if ($this->dealer->isBusted()) {
            return 'Player wins!';
        }

        if ($this->dealer->getScore() >= $this->player->getScore()) {
            return 'Dealer wins!';
        }

        return 'Player wins!';
    }

    public function getPlayer(): Player
    {
        return $this->player;
    }
    public function getDeck(): Deck
    {
        return $this->deck;
    }

    public function getDealer(): Player
    {
        return $this->dealer;
    }

    public function resetGame(): void
    {
        $this->deck = new Deck();
        $this->player = new Player();
        $this->dealer = new Player();
        $this->startGame();

    }
}
