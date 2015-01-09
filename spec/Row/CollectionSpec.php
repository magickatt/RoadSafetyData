<?php

namespace spec\Row;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Row\Accident;
use Row\Casualty;
use Row\Vehicle;

class CollectionSpec extends ObjectBehavior
{
    private $row1;

    private $row2;

    private $row3;

    function let()
    {
        // Doesn't seem to like being constructed with Prophecy doubles...
        $this->row1 = new Accident(array());
        $this->row2 = new Casualty(array());
        $this->row3 = new Vehicle(array());

        $this->beConstructedWith(array(
            $this->row1,
            $this->row2,
            $this->row3
        ));
    }

    function it_can_be_created_with_multiple_rows_and_the_first_row_can_be_retrieved()
    {
        $this->getFirstRow()->shouldReturnAnInstanceOf('\Row\RowInterface'); // Well, duh...
        $this->getFirstRow()->shouldReturn($this->row1);
    }

    function it_can_be_created_with_multiple_rows_and_the_second_row_can_be_retrieved()
    {
        $this->offsetGet(1)->shouldReturn($this->row2);
    }

    function it_can_be_created_with_multiple_rows_and_the_third_row_can_be_retrieved()
    {
        $this->offsetGet(2)->shouldReturn($this->row3);
    }
}
