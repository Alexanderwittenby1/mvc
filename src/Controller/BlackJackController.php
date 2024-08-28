<?php

// src/Controller/BlackJackController.php

namespace App\Controller;

use App\Entity\Players;
use App\Entity\Hand;
use App\Service\BlackJackService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlackJackController extends AbstractController
{
    private $blackJackService;
    private $entityManager;

    public function __construct(BlackJackService $blackJackService, EntityManagerInterface $entityManager)
    {
        $this->blackJackService = $blackJackService;
        $this->entityManager = $entityManager;
    }





    #[Route("/blackjack/setup", name: "blackjack_setup", methods: ["GET", "POST"])]
    public function setup(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $name = $request->request->get('name');
            $bankAccount = (int) $request->request->get('bankAccount');
            $numberOfHands = (int) $request->request->get('numberOfHands');

            $player = new Players();
            $player->setName($name);
            $player->setBankAccount($bankAccount);
            $this->entityManager->persist($player);
            $this->entityManager->flush();

            $session = $request->getSession();
            $session->set('numberOfHands', $numberOfHands);


            $this->blackJackService->startNewRound($player, $numberOfHands);

            return $this->redirectToRoute('blackjack_game', ['player_id' => $player->getId()]);
        }

        return $this->render('blackjack/setup.html.twig');
    }




    #[Route("/blackjack/about", name: "blackjack_about")]
    public function about(): Response
    {
        return $this->render('blackjack/blackjack_about.html.twig');
    }








    #[Route("/blackjack/game/{player_id}", name: "blackjack_game", methods: ["GET"])]
    public function game(int $player_id): Response
    {
        $player = $this->entityManager->getRepository(Players::class)->find($player_id);

        if (!$player) {
            throw $this->createNotFoundException('Player not found');
        }

        $playerHands = $this->entityManager->getRepository(Hand::class)->findBy(['player' => $player]);
        $dealerHand = $this->entityManager->getRepository(Hand::class)->findOneBy(['player' => null]);

        if (!$dealerHand) {
            throw $this->createNotFoundException('Dealer hand not found');
        }

        // Kontrollera spelets status
        $playerScores = [];
        foreach ($playerHands as $hand) {
            $playerScores[] = $this->blackJackService->calculateHandValue($hand);
        }

        $dealerScore = $this->blackJackService->calculateHandValue($dealerHand);

        $gameOver = false;
        $resultMessage = '';

        // Ensure that the player has at least one hand before accessing the first score
        if (!empty($playerScores) && isset($playerScores[0])) {
            $gameOver = $playerScores[0] > 21 || $dealerScore >= 17;

            if ($gameOver) {
                $resultMessage = $this->blackJackService->determineWinner(max($playerScores), $dealerScore);
            }
        } else {
            // Handle the case where no player scores exist, this could be due to an error or a misconfiguration.
            $resultMessage = "No valid player hands found.";
        }

        return $this->render('blackjack/game_start.html.twig', [
            'player' => $player,
            'playerHands' => $playerHands,
            'dealerHand' => $dealerHand,
            'gameOver' => $gameOver,
            'resultMessage' => $resultMessage,
            'playerScores' => $playerScores,
            'dealerScore' => $dealerScore,
        ]);
    }




    #[Route("/blackjack/hit/{player_id}/{hand_id}", name: "blackjack_hit", methods: ["POST"])]
    public function hit(int $player_id, int $hand_id): Response
    {
        $player = $this->entityManager->getRepository(Players::class)->find($player_id);
        if (!$player) {
            throw $this->createNotFoundException('Player not found');
        }

        $hand = $this->entityManager->getRepository(Hand::class)->find($hand_id);
        if (!$hand || $hand->getPlayer() !== $player) {
            throw $this->createNotFoundException('Hand not found or does not belong to player');
        }



        $this->blackJackService->hit($hand);

        return $this->redirectToRoute('blackjack_game', ['player_id' => $player_id]);
    }






    #[Route("/blackjack/stand/{player_id}", name: "blackjack_stand", methods: ["POST"])]
    public function stand(int $player_id): Response
    {
        $player = $this->entityManager->getRepository(Players::class)->find($player_id);

        if (!$player) {
            throw $this->createNotFoundException('Player not found');
        }

        $this->blackJackService->stand($player);

        return $this->redirectToRoute('blackjack_game', ['player_id' => $player_id]);
    }






    #[Route("/blackjack/start-round/{player_id}", name: "blackjack_start_round", methods: ["POST"])]
    public function startNewRound(int $player_id, Request $request): Response
    {
        $player = $this->entityManager->getRepository(Players::class)->find($player_id);

        if (!$player) {
            throw $this->createNotFoundException('Player not found');
        }

        $session = $request->getSession();
        $numberOfHands = (int) $session->get('numberOfHands', 1);





        $this->blackJackService->startNewRound($player, $numberOfHands);

        return $this->redirectToRoute('blackjack_game', ['player_id' => $player_id]);
    }


}
