<?php

namespace Structural\Adapter\ThirdParty;

class Auth
{
    public function __construct(private AuthInterface $auth)
    {
    }

    public function login(array $params): string
    {
        return $this->auth->login($params);
    }
}
