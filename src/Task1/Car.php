<?php

declare(strict_types=1);

namespace App\Task1;

class Car
{
    private int $id;
    private string $image;
    private string $name;
    private int $speed;
    private int $pitStopTime;
    private float $fuelConsumption;
    private float $fuelTankVolume;

    public function __construct(
        int $id,
        string $image,
        string $name,
        int $speed,
        int $pitStopTime,
        float $fuelConsumption,
        float $fuelTankVolume
    ) {
        $this->id = $id;
        $this->image = $image;
        $this->name = $name;
        $this->speed = $speed;
        $this->pitStopTime = $pitStopTime;
        $this->fuelConsumption = $fuelConsumption;
        $this->fuelTankVolume = $fuelTankVolume;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function getPitStopTime(): int
    {
        return $this->pitStopTime;
    }

    public function getFuelConsumption(): float
    {
        return $this->fuelConsumption;
    }

    public function getFuelTankVolume(): float
    {
        return $this->fuelTankVolume;
    }
}

$bmw = new Car(1, 'https://pbs.twimg.com/profile_images/595409436585361408/aFJGRaO6_400x400.jpg',
    'bmw', 50, 1, 20, 50);
$tesla = new Car(2, 'https://i.pinimg.com/originals/e4/15/83/e41583f55444b931f4ba2f0f8bce1970.jpg',
    'tesla', 60, 2, 25, 50);
$ford = new Car(3, '	https://fordsalomao.com.br/wp-content/uploads/2019/02/1499441577430-1-1024x542-256x256.jpg',
    'ford', 70, 3, 30, 50);