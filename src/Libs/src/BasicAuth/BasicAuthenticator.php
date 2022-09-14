<?php

namespace Libs\BasicAuth;

class BasicAuthenticator
{
    public function basicLogin(string $username, string $password): string
    {
        return $username . '-' . $password;
    }
}
