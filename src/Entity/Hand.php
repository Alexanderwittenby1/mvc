<?php

namespace App\Entity;

use App\Repository\HandRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HandRepository::class)]
class Hand
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'hands')]
    private ?Players $player = null;

    /**
     * @var Collection<int, Card>
     */
    #[ORM\ManyToMany(targetEntity: Card::class, inversedBy: 'hands', cascade: ['persist'])]
    private Collection $cards;

    #[ORM\Column(type: 'boolean')]
    private bool $isStand = false;

    public function __construct()
    {
        $this->cards = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlayer(): ?Players
    {
        return $this->player;
    }

    public function setPlayer(?Players $player): static
    {
        $this->player = $player;

        return $this;
    }

    /**
     * @return Collection<int, Card>
     */
    public function getCards(): Collection
    {
        return $this->cards;
    }

    public function addCard(Card $card): static
    {
        if (!$this->cards->contains($card)) {
            $this->cards->add($card);
        }

        return $this;
    }

    public function removeCard(Card $card): static
    {
        $this->cards->removeElement($card);

        return $this;
    }

    public function getIsStand(): bool
    {
        return $this->isStand;
    }

    public function setIsStand(bool $isStand): static
    {
        $this->isStand = $isStand;

        return $this;
    }
}
