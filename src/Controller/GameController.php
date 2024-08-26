<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\CardGame\Game;

class GameController extends AbstractController
{
    #[Route("/game", name: "card_game")]
    public function game(): Response
    {
        return $this->render('game/game.html.twig');
    }

    #[Route("/game/info", name: "card_game_info")]
    public function gameInfo(): Response
    {
        return $this->render('game/game_info.html.twig');
    }

    #[Route('/game/play', name: 'card_game_start', methods: ['GET', 'POST'])]
    public function play(Request $request): Response
    {
        $game = $this->getGameFromSession($request);
        $game->startGame();
        return $this->renderGame($game);
    }

    #[Route('/game/draw', name: 'draw_card', methods: ['POST'])]
    public function drawCard(Request $request): Response
    {
        $game = $this->getGameFromSession($request);
        $game->drawCardForPlayer();

        if ($game->getPlayer()->isBusted()) {
            $game->drawCardForDealer();
            return $this->renderGame($game, $game->determineWinner());
        }

        return $this->renderGame($game);
    }

    #[Route('/game/stand', name: 'stand', methods: ['POST'])]
    public function stand(Request $request): Response
    {
        $game = $this->getGameFromSession($request);
        $game->dealerTurn();
        return $this->renderGame($game, $game->determineWinner());
    }

    #[Route('/game/new', name: 'new_game', methods: ['POST'])]
    public function newGame(Request $request): Response
    {
        $game = new Game();
        $game->resetGame();
        $this->setGameToSession($request, $game);
        return $this->renderGame($game);
    }

    private function renderGame(Game $game, string $gameResult = null): Response
    {
        return $this->render('game/game_start.html.twig', [
            'player_hand' => $game->getPlayer()->getHand(),
            'player_score' => $game->getPlayer()->getScore(),
            'dealer_hand' => $game->getDealer()->getHand(),
            'dealer_score' => $game->getDealer()->getScore(),
            'game_result' => $gameResult,
        ]);
    }

    private function getGameFromSession(Request $request): Game
    {
        $session = $request->getSession();
        $game = $session->get('game', new Game());
        if (!$game instanceof Game) {
            $game = new Game();
            $game->resetGame();
        }
        $session->set('game', $game);
        return $game;
    }

    private function setGameToSession(Request $request, Game $game): void
    {
        $session = $request->getSession();
        $session->set('game', $game);
    }
}
