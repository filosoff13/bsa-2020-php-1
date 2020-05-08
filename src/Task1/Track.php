<?php

declare(strict_types=1);

namespace App\Task1;

class Track
{
    private float $lapLength;
    private int $lapsNumber;

    public function __construct(float $lapLength, int $lapsNumber)
    {
        $this->lapLength = $lapLength;
        $this->lapsNumber = $lapsNumber;
    }

    public function getLapLength(): float
    {
        return $this->lapLength;
    }

    public function getLapsNumber(): int
    {
        return $this->lapsNumber;
    }

    public function add(Car $car): void
    {
        //array, non return
        $currentNumber = $this->getLapsNumber();
        $this->lapsNumber = $currentNumber + 1;
    }

    public function all(): array
    {
        // @todo
    }

    public function run(): Car
    {
        // @todo
    }
}