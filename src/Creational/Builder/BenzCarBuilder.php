<?php

namespace Creational\Builder;

use Creational\Builder\CarBuilderInterface;
use Creational\Builder\Models\BenzCar;
use Creational\Builder\Models\Car;

class BenzCarBuilder implements CarBuilderInterface
{
    private Car $type;

    public function createCar(): void
    {
        $this->type = new BenzCar();
    }

    public function addEngine(): void
    {
        $this->type->setPart("ENGINE", "engine");
    }

    public function addDoors(): void
    {
        $this->type->setPart("DOORs", "doors");
    }

    public function addBody(): void
    {
        $this->type->setPart("BODY", "body");
    }

    public function addWheels(): void
    {
        $this->type->setPart("WHEELS", "wheels");
    }

    public function getCar(): Car
    {
        return $this->type;
    }
}
