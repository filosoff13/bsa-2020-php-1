<?php

declare(strict_types=1);

namespace App\Task3;

use App\Task1\Car;
use App\Task1\Track;

class CarTrackHtmlPresenter
{
    public function present(Track $track): string
    {
        $cars = $track->all();
        $contentBlock = "<div align='center'><h1>Cars on Track</h1>";

        foreach ($cars as $car) {
            $carBlock = '<div style="background-color:lightblue">';

            $carBlock .= "<p>Car number ". $car->getId() . "</p>";

            $carBlock .= '<img src = "'. $car->getImage() .'" alt = "car image" height = "450">';

            $carBlock .= "<p><b>Name: </b>". $car->getName() . "; " .
                "<b>Max speed: </b>" . $car->getSpeed() . " km/h. </p>";
            $carBlock .= "<p><b>Fuel tank volume: </b>" . $car->getFuelTankVolume()
                . " litres</p>" . PHP_EOL;

            $carBlock .= "<p>Fuel Consumption: " .
                $car->getFuelConsumption() . " litres per 100 km "
                . "</p>" . PHP_EOL;

            $carBlock .= "</div>" . PHP_EOL . PHP_EOL;

            $contentBlock .= $carBlock;
        }
        $contentBlock .= "</div>";

        return $contentBlock;
    }
}