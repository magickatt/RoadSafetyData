<?php

namespace spec\Row;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AccidentSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(array(
            'Accident_Index','Location_Easting_OSGR','Location_Northing_OSGR','Longitude','Latitude','Police_Force',
            'Accident_Severity','Number_of_Vehicles','Number_of_Casualties','Date','Day_of_Week','Time','Local_Authority_(District)',
            'Local_Authority_(Highway)','1st_Road_Class','1st_Road_Number','Road_Type','Speed_limit','Junction_Detail',
            'Junction_Control','2nd_Road_Class','2nd_Road_Number','Pedestrian_Crossing-Human_Control','Pedestrian_Crossing-Physical_Facilities',
            'Light_Conditions','Weather_Conditions','Road_Surface_Conditions','Special_Conditions_at_Site','Carriageway_Hazards',
            'Urban_or_Rural_Area','Did_Police_Officer_Attend_Scene_of_Accident','LSOA_of_Accident_Location'
        ));
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Row\AbstractRow');
    }
}
