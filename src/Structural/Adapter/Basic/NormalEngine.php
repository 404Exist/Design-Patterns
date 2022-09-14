<?php

namespace Structural\Adapter\Basic;

class NormalEngine implements EngineInterface
{
    public function startEngine(): string
    {
        return "normal engine start";
    }
}
