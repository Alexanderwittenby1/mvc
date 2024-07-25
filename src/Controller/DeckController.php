<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class DeckController extends AbstractController
{
    private const SUITS = ['Hearts', 'Diamonds', 'Clubs', 'Spades'];
    private const VALUES = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'];

    #[Route("/api/deck", name:"api_deck", methods:["GET"])]
    public function getDeck(SessionInterface $session): JsonResponse
    {
        $deck = $this->initializeDeck();
        $session->set('deck', $deck);
        return new JsonResponse($deck);
    }


    #[Route("/api/deck/shuffle", name: "shuffle_deck")]
    public function shuffleDeck(SessionInterface $session): JsonResponse
    {
        $deck = $this->initializeDeck();
        shuffle($deck);
        $session->set('deck', $deck);
        return new JsonResponse($deck);
    }



    #[Route("/api/deck/draw/{number}", name: "draw_multiple_cards")]
    public function drawMultipleCards(SessionInterface $session, int $number): JsonResponse
    {
        return $this->drawCards($session, $number);
    }

    private function drawCards(SessionInterface $session, int $number): JsonResponse
    {
        $deck = $session->get('deck', $this->initializeDeck());
        $drawnCards = array_splice($deck, 0, $number);
        $session->set('deck', $deck);
        return new JsonResponse([
            'drawn_cards' => $drawnCards,
            'remaining_cards' => count($deck)
        ]);
    }


    private function initializeDeck(): array
    {
        $deck = [];
        foreach (self::SUITS as $suit) {
            foreach (self::VALUES as $value) {
                $deck[] = ['suit' => $suit, 'value' => $value];
            }
        }
        return $deck;
    }
}
