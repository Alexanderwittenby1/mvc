<?php

namespace App\CardGame;

/**
 * @property-read Card[] $hand
 */
class Player
{
    /**
     * @var Card[]
     */
    private array $hand;

    private int $score;

    public function __construct()
    {
        $this->hand = [];
        $this->score = 0;
    }

    public function drawCard(Deck $deck): void
    {
        $card = $deck->draw();
        $this->hand[] = $card[0]; // Anta att $card är en array av Card
        $this->calculateScore();
    }

    public function calculateScore(): void
    {
        $this->score = 0;
        $aceCount = 0;

        foreach ($this->hand as $card) {
            $value = $card->getValue();

            if ($value == 'A') {
                $aceCount++;
                $this->score += 11;
                continue;
            }

            if (in_array($value, ['♖', '♕', '♔'])) {
                $this->score += 10;
                continue;
            }

            $this->score += (int)$value; // Antag att övriga kort är numeriska värden
        }

        while ($this->score > 21 && $aceCount > 0) {
            $this->score -= 10;
            $aceCount--;
        }
    }

    /**
     * @return Card[]
     */
    public function getHand(): array
    {
        return $this->hand;
    }

    public function getScore(): int
    {
        return $this->score;
    }

    public function isBusted(): bool
    {
        return $this->score > 21;
    }
}
