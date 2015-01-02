<?php

class Parser
{
    private $csvFile;

    public function __construct(\Keboola\Csv\CsvFile $csvFile)
    {
        $this->csvFile = $csvFile;
    }

    public function parse()
    {

    }
}
