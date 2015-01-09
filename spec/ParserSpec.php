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
        $rowCollection = new \Row\Collection();

        $this->parse($rowCollection)->shouldReturnAnInstanceOf(new \Row\Collection());
    }
}