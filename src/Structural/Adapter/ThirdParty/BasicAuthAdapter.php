<?php

namespace Structural\Adapter\ThirdParty;

use Libs\BasicAuth\BasicAuthenticator;

class BasicAuthAdapter implements AuthInterface
{
    public function __construct(private BasicAuthenticator $auth)
    {
    }

    public function login(array $params): string
    {
        return $this->auth->basicLogin($params["username"], $params["password"]);
    }
}
