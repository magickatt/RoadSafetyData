<?php

namespace spec\Row\Strategy;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Row\Strategy\Accident;
use Row\Strategy\Casualty;
use Row\Strategy\Vehicle;

class CollectionSpec extends ObjectBehavior
{
    private $accident;

    private $casualty;

    private $vehicle;

    function let()
    {
        $this->accident = new Accident();
        $this->casualty = new Casualty();
        $this->vehicle = new Vehicle();

        $this->beConstructedWith(array(
            $this->accident,
            $this->casualty,
            $this->vehicle
        ));
    }

    function it_will_contain_strategies()
    {
        $this->offsetGet(0)->shouldBeLike($this->accident);
        $this->offsetGet(1)->shouldBeLike($this->casualty);
        $this->offsetGet(2)->shouldBeLike($this->vehicle);
    }

}
