<?php

namespace App\Service;

use App\Entity\Hand;
use Doctrine\ORM\EntityManagerInterface;

class HandManager
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function clearHand(Hand $hand): void
    {
        foreach ($hand->getCards() as $card) {
            $hand->removeCard($card);
            $this->em->remove($card);
        }
        $this->em->remove($hand);
    }
}
