<?php

namespace Structural\Composite;

class SimpleBox implements ProductInterface
{
    public function __construct(private int $price)
    {
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}
