<?php

namespace Creational\Builder;

use Creational\Builder\Models\Car;

class CarProducer
{
    public function __construct(private CarBuilderInterface $builder)
    {
    }

    public function produceCar(): Car
    {
        $this->builder->createCar();
        $this->builder->addEngine();
        $this->builder->addDoors();
        $this->builder->addBody();
        $this->builder->addWheels();
        return $this->builder->getCar();
    }
}
