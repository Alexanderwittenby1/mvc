<?php

namespace App\Controller;

use App\CardGame\Deck;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class DeckController extends AbstractController
{
    #[Route("/card", name: "card_start")]
    public function home(): Response
    {
        return $this->render('card/home.html.twig');
    }

    #[Route("/card/deck", name: "show_deck")]
    public function showDeck(SessionInterface $session): Response
    {
        /** @var Deck $deck */
        $deck = $session->get('deck', new Deck());
        $session->set('deck', $deck);

        return $this->render('card/deck.html.twig', [
            'deck' => $deck->getCards(),
        ]);
    }

    #[Route("/card/deck/shuffle", name: "shuffle")]
    public function shuffleCards(SessionInterface $session): Response
    {
        $deck = new Deck();
        $deck->shuffle();

        $session->set('deck', $deck);

        return $this->render('card/deck.html.twig', [
            'deck' => $deck->getCards(),
        ]);
    }

    #[Route("/card/deck/draw", name: "card_deck_draw")]
    public function drawCard(SessionInterface $session): Response
    {
        /** @var Deck $deck */
        $deck = $session->get('deck', new Deck());
        $cards = $deck->draw();
        $session->set('deck', $deck);

        $remaining = $deck->count();

        return $this->render('card/draw.html.twig', [
            'cards' => $cards,
            'remaining' => $remaining
        ]);
    }

    #[Route("/card/deck/draw/{number}", name: "draw_cards")]
    public function drawCards(SessionInterface $session, int $number): Response
    {
        /** @var Deck $deck */
        $deck = $session->get('deck', new Deck());
        $drawnCards = $deck->draw($number);
        $session->set('deck', $deck);
        $remaining = $deck->count();

        return $this->render('card/draw_cards.html.twig', [
            'drawnCards' => $drawnCards,
            'remaining' => $remaining,
        ]);
    }

    #[Route("/session/delete", name: "session_delete")]
    public function delete(SessionInterface $session): Response
    {
        $session->clear();
        $this->addFlash(
            'notice',
            'Nu är sessionen raderad!'
        );
        return $this->redirectToRoute('card_start');
    }

    #[Route("/session", name: "session_debug")]
    public function session(SessionInterface $session): Response
    {
        return $this->render('card/session.html.twig', [
            'session_data' => $session->all(),
        ]);
    }
}
