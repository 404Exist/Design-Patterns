<?php

namespace Structural\Bridge;

abstract class Car
{
    abstract public function __construct(CarColor $carColor);

    abstract public function getProduct(): string;
}
