<?php

namespace spec\Row;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CasualtySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Row\RowInterface');
    }
}
