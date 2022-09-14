<?php

namespace Libs\TokenAuth;

class TokenAuthenticator
{
    public function tokenLogin(string $token, string $key): string
    {
        return base64_encode($token . "-" . $key);
    }
}
