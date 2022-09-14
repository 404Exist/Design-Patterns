<?php

namespace Structural\Adapter\ThirdParty;

use Libs\TokenAuth\TokenAuthenticator;

class TokenAuthAdapter implements AuthInterface
{
    public function __construct(private TokenAuthenticator $auth)
    {
    }

    public function login(array $params): string
    {
        return $this->auth->tokenLogin($params["token"], $params["key"]);
    }
}
