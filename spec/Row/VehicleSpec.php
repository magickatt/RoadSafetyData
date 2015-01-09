<?php

namespace spec\Row;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class VehicleSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(array(
            'Acc_Index','Vehicle_Reference','Vehicle_Type','Towing_and_Articulation','Vehicle_Manoeuvre','Vehicle_Location-Restricted_Lane',
            'Junction_Location','Skidding_and_Overturning','Hit_Object_in_Carriageway','Vehicle_Leaving_Carriageway',
            'Hit_Object_off_Carriageway','1st_Point_of_Impact','Was_Vehicle_Left_Hand_Drive?','Journey_Purpose_of_Driver',
            'Sex_of_Driver','Age_Band_of_Driver','Engine_Capacity_(CC)','Propulsion_Code','Age_of_Vehicle','Driver_IMD_Decile','Driver_Home_Area_Type'
        ));
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Row\RowInterface');
    }
}
