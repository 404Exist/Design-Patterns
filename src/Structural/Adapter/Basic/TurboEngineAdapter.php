<?php

namespace Structural\Adapter\Basic;

class TurboEngineAdapter implements EngineInterface
{
    public function __construct(private TurboEngine $engine)
    {
    }

    public function startEngine(): string
    {
        return $this->engine->startTurbo();
    }
}
