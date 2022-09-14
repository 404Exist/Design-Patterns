<?php

namespace Structural\Adapter\ThirdParty;

interface AuthInterface
{
    public function login(array $params): string;
}
