<?php

// src/Controller/PlayerController.php

namespace App\Controller;

use App\Entity\Players;
use App\Form\PlayerType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlayerController extends AbstractController
{
    #[Route('/player/new', name: 'player_new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $player = new Players();

        $form = $this->createForm(PlayerType::class, $player);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($player);
            $entityManager->flush();

            // Omdirigera till blackjack_start med player_id
            return $this->redirectToRoute('blackjack_setup', ['player_id' => $player->getId()]);
        }

        return $this->render('player/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
