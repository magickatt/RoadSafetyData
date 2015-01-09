<?php

namespace spec\Row;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CasualtySpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(array(
            'Acc_Index','Vehicle_Reference','Casualty_Reference','Casualty_Class','Sex_of_Casualty','Age_Band_of_Casualty',
            'Casualty_Severity','Pedestrian_Location','Pedestrian_Movement','Car_Passenger','Bus_or_Coach_Passenger',
            'Pedestrian_Road_Maintenance_Worker','Casualty_Type','Casualty_Home_Area_Type'
        ));
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Row\RowInterface');
    }
}
