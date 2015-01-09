<?php

namespace spec;

use Keboola\Csv\CsvFile;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Row\Factory;
use Row\Strategy\Collection;
use Row\Strategy\HashMap;

class ParserSpec extends ObjectBehavior
{
    function let()
    {
        $csvFile = new CsvFile(__DIR__ . '/../data/test.csv');

        $strategyCollection = new Collection(array(
            new \Row\Strategy\Accident(),
            new \Row\Strategy\Casualty(),
            new \Row\Strategy\Vehicle()
        ));
        $hashMap = new HashMap();
        $rowFactory = new Factory($strategyCollection, $hashMap);

        $this->beConstructedWith($csvFile, $rowFactory);
    }

    function it_should_be_able_to_parse_a_csv_file_and_return_rows_of_data()
    {
        $rowCollection = new \Row\Collection(array(
            new \Row\Accident(explode(',', 'Accident_Index,Location_Easting_OSGR,Location_Northing_OSGR,Longitude,Latitude,Police_Force,Accident_Severity,Number_of_Vehicles,Number_of_Casualties,Date,Day_of_Week,Time,Local_Authority_(District),Local_Authority_(Highway),1st_Road_Class,1st_Road_Number,Road_Type,Speed_limit,Junction_Detail,Junction_Control,2nd_Road_Class,2nd_Road_Number,Pedestrian_Crossing-Human_Control,Pedestrian_Crossing-Physical_Facilities,Light_Conditions,Weather_Conditions,Road_Surface_Conditions,Special_Conditions_at_Site,Carriageway_Hazards,Urban_or_Rural_Area,Did_Police_Officer_Attend_Scene_of_Accident,LSOA_of_Accident_Location')),
            new \Row\Accident(explode(',', '197901A1BAW34,198460,894000,NULL,NULL,1,3,1,1,01/01/79,2,01:00,23,9999,6,0,9,30,3,4,-1,-1,-1,-1,4,8,3,-1,0,-1,-1,')),
            new \Row\Accident(explode(',', '197901A1BFD77,406380,307000,NULL,NULL,1,3,2,3,01/01/79,2,01:25,17,9999,3,112,9,30,6,4,-1,-1,-1,-1,4,8,3,-1,0,-1,-1,')),
            new \Row\Accident(explode(',', '197901A1BGC20,281680,440000,NULL,NULL,1,3,2,2,01/01/79,2,01:30,2,9999,3,502,-1,30,3,2,-1,-1,-1,-1,4,8,3,-1,0,-1,-1,')),
        ));

        $this->parse(new \Row\Collection())->shouldBeLike($rowCollection);
    }
}