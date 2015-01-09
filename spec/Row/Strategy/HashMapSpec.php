<?php

namespace spec\Row\Strategy;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class HashMapSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Row\Strategy\HashMap');
    }

    function it_should_know_which_class_maps_to_the_accident_row_strategy()
    {
        $this->getClassMatchingStrategyName('Row\Strategy\Accident')->shouldEqual('\Row\Accident');
    }

    function it_should_know_which_class_maps_to_the_casualty_row_strategy()
    {
        $this->getClassMatchingStrategyName('Row\Strategy\Casualty')->shouldEqual('\Row\Casualty');
    }

    function it_should_know_which_class_maps_to_the_vehicle_row_strategy()
    {
        $this->getClassMatchingStrategyName('Row\Strategy\Vehicle')->shouldEqual('\Row\Vehicle');
    }
}
