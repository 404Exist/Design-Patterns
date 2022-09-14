<?php

namespace Structural\Adapter\Basic;

class Car
{
    public function __construct(private EngineInterface $engine)
    {
    }

    public function start(): string
    {
        return $this->engine->startEngine();
    }
}
