<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Structural\Adapter\ThirdParty\Auth;
use Structural\Adapter\ThirdParty\BasicAuthAdapter;
use Structural\Adapter\ThirdParty\TokenAuthAdapter;

final class AdapterThirdPartyTest extends TestCase
{
    public function testCanAuthWithBasicAuthLib()
    {
        $basicAuthAdapter = $this->createMock(BasicAuthAdapter::class);

        $basicAuthAdapter->expects($this->once())->method("login")->willReturn("test-test");

        $user = new Auth($basicAuthAdapter);

        $user->login(["username" => "test", "password", "test"]);
    }

    public function testCanAuthWithTokenAuthLib()
    {
        $tokenAuthAdapter = $this->createMock(TokenAuthAdapter::class);

        $tokenAuthAdapter->expects($this->once())->method("login")->willReturn(base64_encode("test-test"));

        $user = new Auth($tokenAuthAdapter);

        $user->login(["key" => "test", "token", "test"]);
    }
}
