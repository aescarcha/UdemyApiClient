<?php

namespace spec\aEscarcha\UdemyApiClient;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ApiSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('aEscarcha\UdemyApiClient\Api');
    }
}
