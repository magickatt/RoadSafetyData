<?php

namespace spec\Row\Strategy;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class VehicleSpec extends ObjectBehavior
{

    function it_can_tell_if_some_data_represents_an_accident_row()
    {
        $data = array(
            'Acc_Index','Vehicle_Reference','Vehicle_Type','Towing_and_Articulation','Vehicle_Manoeuvre','Vehicle_Location-Restricted_Lane',
            'Junction_Location','Skidding_and_Overturning','Hit_Object_in_Carriageway','Vehicle_Leaving_Carriageway',
            'Hit_Object_off_Carriageway','1st_Point_of_Impact','Was_Vehicle_Left_Hand_Drive?','Journey_Purpose_of_Driver',
            'Sex_of_Driver','Age_Band_of_Driver','Engine_Capacity_(CC)','Propulsion_Code','Age_of_Vehicle','Driver_IMD_Decile','Driver_Home_Area_Type'
        );

        $this->doesThisMatchTheData($data)->shouldBe(true);
    }

    function it_can_tell_if_some_data_does_not_represent_an_accident_row()
    {
        $data = array(
            'Accident_Index','Location_Easting_OSGR','Location_Northing_OSGR','Longitude','Latitude','Police_Force',
            'Accident_Severity','Number_of_Vehicles','Number_of_Casualties','Date','Day_of_Week','Time','Local_Authority_(District)',
            'Local_Authority_(Highway)','1st_Road_Class','1st_Road_Number','Road_Type','Speed_limit','Junction_Detail',
            'Junction_Control','2nd_Road_Class','2nd_Road_Number','Pedestrian_Crossing-Human_Control','Pedestrian_Crossing-Physical_Facilities',
            'Light_Conditions','Weather_Conditions','Road_Surface_Conditions','Special_Conditions_at_Site','Carriageway_Hazards',
            'Urban_or_Rural_Area','Did_Police_Officer_Attend_Scene_of_Accident','LSOA_of_Accident_Location'
        );

        $this->doesThisMatchTheData($data)->shouldBe(false);
    }

}
