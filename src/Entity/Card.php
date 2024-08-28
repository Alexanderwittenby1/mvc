<?php

namespace App\Entity;

use App\Repository\CardRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CardRepository::class)]
class Card
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $suit = null;

    #[ORM\Column(length: 255)]
    private ?string $rank = null;

    public function __construct()
    {
        // No need to initialize hands here
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSuit(): ?string
    {
        return $this->suit;
    }

    public function setSuit(string $suit): static
    {
        $this->suit = $suit;

        return $this;
    }

    public function getRank(): ?string
    {
        return $this->rank;
    }

    public function setRank(string $rank): static
    {
        $this->rank = $rank;

        return $this;
    }
}
