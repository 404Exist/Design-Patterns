<?php

namespace Creational\Builder\Models;

class BMWCar extends Car
{
    private array $data = [];

    public function setPart(string $name, $value)
    {
        $this->data[$name] = $value;
    }
}
