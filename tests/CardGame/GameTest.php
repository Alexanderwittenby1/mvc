<?php

use PHPUnit\Framework\TestCase;
use App\CardGame\Game;
use App\CardGame\Deck;
use App\CardGame\Card;

class GameTest extends TestCase
{
    /**
    * Test that a Game object is created successfully.
    *
    * @return void
    */
    public function testCreateGame(): void
    {
        $game = new Game();
        $this->assertInstanceOf(Game::class, $game);
    }

    /**
    * Test that the drawCardForPlayer method draws a card for the player.
    *
    * @return void
    */

    public function testDrawCardForPlayer(): void
    {
        // Skapa en instans av Game och Player
        $game = new Game();
        $player = $game->getPlayer(); // Hämta spelaren från spelet

        // Kontrollera att det finns kort i leken
        $deck = $game->getDeck();
        $this->assertNotEmpty($deck->getCards(), "Deck should have cards.");

        // Anropa drawCardForPlayer() för att dra ett kort för spelaren
        $game->drawCardForPlayer();

        // Kontrollera att spelarens hand nu innehåller ett kort

        $this->assertNotEmpty($player->getHand(), "Player's hand should have cards.");

        // Kontrollera att kortet finns i handen.
        // $hand = $player->getHand();
        // echo $hand[0];

    }

    /**
    * Test that the drawCardForDealer method draws a card for the dealer.
    *
    * @return void
    */

    public function testDrawCardForDealer(): void
    {
        // Skapa en instans av Game och Player
        $game = new Game();
        $dealer = $game->getDealer(); // Hämta spelaren från spelet

        // Kontrollera att det finns kort i leken
        $deck = $game->getDeck();
        $this->assertNotEmpty($deck->getCards(), "Deck should have cards.");

        // Anropa drawCardForPlayer() för att dra ett kort för spelaren
        $game->drawCardForDealer();

        // Kontrollera att spelarens hand nu innehåller ett kort

        $this->assertNotEmpty($dealer->getHand(), "Player's hand should have cards.");

        // Kontrollera att kortet finns i handen.
        // $hand = $dealer->getHand();
        // echo $hand[0];

    }

    /**
    * Test that the dealerTurn method ends the turn for the dealer.
    *
    * @return void
    */

    public function testDealerturn(): void
    {
        $game = new Game();
        $dealer = $game->getDealer();
        $game->dealerTurn();
        $this->assertGreaterThanOrEqual(17, $dealer->getScore(), "Dealer's score should be at least 17.");
        $this->assertNotEmpty($dealer->getHand(), "Dealer's hand should not be empty after turn.");



    }

    /**
    * Test that the determineWinner method determines the winner correctly.
    *
    * @return void
    */
    public function testDetermineWinner(): void
    {
        $game = new Game();
        $player = $game->getPlayer();
        $dealer = $game->getDealer();


        // Dra kort åt spelaren
        $game->drawCardForPlayer();
        $game->drawCardForPlayer();

        // Dra kort åt dealern
        $game->drawCardForDealer();
        $game->drawCardForDealer();

        // Kolla om spelaren och dealern har fått kort
        $this->assertNotEmpty($player->getHand(), "Player's hand should not be empty.");
        $this->assertNotEmpty($dealer->getHand(), "Dealer's hand should not be empty.");

        // Beräkna vinnaren
        $winner = $game->determineWinner();

        // Skriv ut poäng och händer för felsökning
        // echo "Player's score: " . $player->getScore() . "\n";
        // echo "Dealer's score: " . $dealer->getScore() . "\n";
        // echo "Player's hand: ";
        // print_r($player->getHand());
        // echo "Dealer's hand: ";
        // print_r($dealer->getHand());
        // echo "Winner: " . $winner . "\n";

        // Verifiera att vinnaren är antingen 'Player wins!' eller 'Dealer wins!'
        $this->assertContains($winner, ['Player wins!', 'Dealer wins!']);

    }



    /**
    * Test that the resetGame method resets the game correctly.
    *
    * @return void
    */
    public function testResetGame(): void
    {
        $game = new Game();

        // Dra några kort för att ändra det initiala tillståndet
        $game->drawCardForPlayer();
        $game->drawCardForDealer();

        // Kontrollera att spelets tillstånd har förändrats från det initiala
        $this->assertNotEmpty($game->getPlayer()->getHand(), "Player's hand should not be empty before reset.");
        $this->assertNotEmpty($game->getDealer()->getHand(), "Dealer's hand should not be empty before reset.");
        $this->assertLessThan(52, count($game->getDeck()->getCards()), "Deck should have less than 52 cards before reset.");

        // Återställ spelet
        $game->resetGame();

        // Kontrollera att spelets tillstånd har återställts
        $this->assertEmpty($game->getPlayer()->getHand(), "Player's hand should be empty after reset.");
        $this->assertEmpty($game->getDealer()->getHand(), "Dealer's hand should be empty after reset.");
        $this->assertCount(52, $game->getDeck()->getCards(), "Deck should have 52 cards after reset.");
    }

}
