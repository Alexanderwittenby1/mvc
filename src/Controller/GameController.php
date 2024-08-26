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
        // Hämta sessionen
        $session = $request->getSession();

        // Hämta spelet från sessionen, eller skapa ett nytt om det inte finns
        $game = $session->get('game');

        if (!$game instanceof Game) {
            $game = new Game();
            $game->resetGame();
            $session->set('game', $game);
        } else {
            $game->startGame();
        }

        return $this->renderGame($game);
    }



    #[Route('/game/draw', name: 'draw_card', methods: ['POST'])]
    public function drawCard(Request $request): Response
    {

        $session = $request->getSession();
        $game = $session->get('game');

        if (!$game instanceof Game) {
            $game = new Game();
            $session->set('game', $game);
        }

        $game->drawCardForPlayer();

        if ($game->getPlayer()->isBusted()) {
            $game->drawCardForDealer();
            $session->set('game', $game);
            return $this->renderGame($game, $game->determineWinner());
        }

        $session->set('game', $game);
        return $this->renderGame($game);
    }

    #[Route('/game/stand', name: 'stand', methods: ['POST'])]
    public function stand(Request $request): Response
    {

        $session = $request->getSession();
        $game = $session->get('game');

        if (!$game instanceof Game) {
            return $this->redirectToRoute('card_game');
        }

        $game->dealerTurn();

        $session->set('player_hand', $game->getPlayer()->getHand());
        $session->set('dealer_hand', $game->getDealer()->getHand());

        return $this->renderGame($game, $game->determineWinner());
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

    #[Route('/game/new', name: 'new_game', methods: ['POST'])]
    public function newGame(Request $request): Response
    {

        $session = $request->getSession();
        $game = new Game();
        $game->resetGame();  // Återställ spelet
        $session->set('game', $game);

        return $this->renderGame($game);
    }

}
