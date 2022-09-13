<?php

namespace Creational\Pool;

class CarPool
{
    private array $freeCars = [];
    private array $busyCars = [];

    public function rent(): Car
    {
        $car = new Car();

        if (count($this->freeCars)) {
            $car = array_pop($this->freeCars);
        }

        $this->busyCars[$car->id()] = $car;

        return $car;
    }

    public function free(Car $car): void
    {
        if (isset($this->busyCars[$car->id()])) {
            unset($this->busyCars[$car->id()]);
            $this->freeCars[$car->id()] = $car;
        }
    }

    public function getBusyConut(): int
    {
        return count($this->busyCars);
    }

    public function getFreeConut(): int
    {
        return count($this->freeCars);
    }
}
