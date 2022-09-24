<?php

namespace Structural\Decorator;

class Car
{
    private string $color = "";

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor($color): self
    {
        $this->color .= $color;
        return $this;
    }
}
