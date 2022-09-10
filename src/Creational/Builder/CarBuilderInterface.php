<?php

namespace Creational\Builder;

use Creational\Builder\Models\Car;

interface CarBuilderInterface
{
    public function createCar(): void;
    public function addEngine(): void;
    public function addDoors(): void;
    public function addBody(): void;
    public function addWheels(): void;
    public function getCar(): Car;
}
