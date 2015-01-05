<?php

namespace spec;

use Keboola\Csv\CsvFile;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ParserSpec extends ObjectBehavior
{
    function let()
    {
        //$csvFile = new CsvFile(__DIR__ . '/../data/test.csv');
        //$this->beConstructedWith($csvFile);
    }

    function it_should_be_able_to_parse_a_csv_file_and_return_rows_of_data()
    {
        //$this->parse()->shouldReturnAnInstanceOf(new \Row\Collection());
    }
}