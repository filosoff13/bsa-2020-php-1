<?php

declare(strict_types=1);

namespace App\Task1;

class Track
{
    private float $lapLength;
    private int $lapsNumber;
    private array $carsList = [];

    public function __construct(float $lapLength, int $lapsNumber)
    {
        $this->lapLength = $lapLength;
        $this->lapsNumber = $lapsNumber;
//        $this->carsList = [];
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
        $this->carsList[] = $car;
    }

    public function all(): array
    {
        return $this->carsList;
    }

    public function run(): Car
    {
        $distance = $this->getLapsNumber() * $this->getLapLength();
        $cars = $this->carsList;
        $carsTime = [];

        foreach ($cars as $key => $value){
            $speed = $value->getSpeed();
            $fuelTankVolume = $value->getFuelTankVolume();
            $fuelConsumption = $value->getFuelConsumption();
            $pitStopTime = $value->getPitStopTime();

            $timeOnTheTrack = $distance / $speed * 3600;
            $pitStopsAmount = floor((($distance / 100) * $fuelConsumption) / $fuelTankVolume);
            $timeOnPitStop = $pitStopsAmount * $pitStopTime;
            $totalTime = $timeOnTheTrack + $timeOnPitStop;
            $carsTime[$key] = $totalTime;
        }

        return $this->all()[array_search(min($carsTime), $carsTime)];
    }
}

//create new objects: new cars
$bmw = new Car(1, 'https://pbs.twimg.com/profile_images/595409436585361408/aFJGRaO6_400x400.jpg',
    'bmw', 50, 10, 20, 50);
$tesla = new Car(2, 'https://i.pinimg.com/originals/e4/15/83/e41583f55444b931f4ba2f0f8bce1970.jpg',
    'tesla', 60, 20, 25, 50);
$ford = new Car(3, '	https://fordsalomao.com.br/wp-content/uploads/2019/02/1499441577430-1-1024x542-256x256.jpg',
    'ford', 70, 30, 30, 50);

$track = new Track(100, 5);
$track->add($bmw);
$track->add($tesla);
$track->add($ford);
$track->all();

$track->run();
