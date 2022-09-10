<?php

namespace Creational\Builder;

use Creational\Builder\CarBuilderInterface;
use Creational\Builder\Models\BMWCar;
use Creational\Builder\Models\Car;

class BMWCarBuilder implements CarBuilderInterface
{
    private Car $type;

    public function createCar(): void
    {
        $this->type = new BMWCar();
    }

    public function addEngine(): void
    {
        $this->type->setPart("ENGINE", "BM-engine");
    }

    public function addDoors(): void
    {
        $this->type->setPart("DOORs", "BM-doors");
    }

    public function addBody(): void
    {
        $this->type->setPart("BODY", "BM-body");
    }

    public function addWheels(): void
    {
        $this->type->setPart("WHEELS", "BM-wheels");
    }

    public function getCar(): Car
    {
        return $this->type;
    }
}
