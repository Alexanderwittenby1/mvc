<?php

namespace App\Entity;

use App\Repository\PlayersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlayersRepository::class)]
class Players
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $bankAccount = null;

    /**
     * @var Collection<int, Hand>
     */
    #[ORM\OneToMany(targetEntity: Hand::class, mappedBy: 'player')]
    private Collection $hands;

    public function __construct()
    {
        $this->hands = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getBankAccount(): ?int
    {
        return $this->bankAccount;
    }

    public function setBankAccount(int $bankAccount): static
    {
        $this->bankAccount = $bankAccount;

        return $this;
    }

    /**
     * @return Collection<int, Hand>
     */
    public function getHands(): Collection
    {
        return $this->hands;
    }

    public function addHand(Hand $hand): static
    {
        if (!$this->hands->contains($hand)) {
            $this->hands->add($hand);
            $hand->setPlayer($this);
        }

        return $this;
    }

    public function removeHand(Hand $hand): static
    {
        if ($this->hands->removeElement($hand)) {
            // set the owning side to null (unless already changed)
            if ($hand->getPlayer() === $this) {
                $hand->setPlayer(null);
            }
        }

        return $this;
    }
}
