<?php

namespace Structural\Adapter\Basic;

class TurboEngine implements TurboInterface
{
    public function startTurbo(): string
    {
        return "turbo engine start";
    }
}
