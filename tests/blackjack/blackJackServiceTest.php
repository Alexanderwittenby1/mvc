<?php

namespace App\Tests\Service;

use App\Service\BlackJackService;
use App\Service\CardProvider; // Make sure this is the correct namespace
use App\Service\HandManager;
use App\Entity\Hand;
use Doctrine\ORM\EntityManagerInterface;
use PHPUnit\Framework\TestCase;

class blackJackServiceTest extends TestCase
{
    private $blackJackService;

    protected function setUp(): void
    {
        $entityManager = $this->createMock(EntityManagerInterface::class);
        $cardProvider = $this->createMock(CardProvider::class);
        $handManager = $this->createMock(HandManager::class);

        $this->blackJackService = new BlackJackService(
            $entityManager,
            $cardProvider,
            $handManager
        );
    }

    public function testDetermineWinnerPlayerBust(): void
    {
        $playerScore = 22; 
        $dealerScore = 20; 

        $result = $this->blackJackService->determineWinner($playerScore, $dealerScore);

        $this->assertEquals('Dealer wins', $result);
    }

    public function testDetermineWinnerDealerBust(): void
    {
        $playerScore = 20; 
        $dealerScore = 22; 

        $result = $this->blackJackService->determineWinner($playerScore, $dealerScore);

        $this->assertEquals('Player wins', $result);
    }

    public function testDetermineWinnerPlayerWins(): void
    {
        $playerScore = 19; 
        $dealerScore = 17;

        $result = $this->blackJackService->determineWinner($playerScore, $dealerScore);

        $this->assertEquals('Player wins', $result);
    }

    public function testDetermineWinnerDealerWins(): void
    {
        $playerScore = 17; 
        $dealerScore = 19; 

        $result = $this->blackJackService->determineWinner($playerScore, $dealerScore);

        $this->assertEquals('Dealer wins', $result);
    }

    public function testDetermineWinnerDraw(): void
    {
        $playerScore = 18; 
        $dealerScore = 18; 

        $result = $this->blackJackService->determineWinner($playerScore, $dealerScore);

        $this->assertEquals('Draw', $result);
    }
}
