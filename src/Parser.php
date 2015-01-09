<?php

class Parser
{
    private $csvFile;

    private $rowFactory;

    private $rowCollection;

    public function __construct(\Keboola\Csv\CsvFile $csvFile, \Row\Factory $rowFactory)
    {
        $this->csvFile = $csvFile;
        $this->rowFactory = $rowFactory;
    }

    public function parse(\Row\Collection $rowCollection)
    {
        $rowPrototype = null;

        foreach ($this->csvFile as $rowData)
        {
            if (is_null($rowPrototype)) {
                $row = $this->rowFactory->create($rowData);
                $rowPrototype = clone $row;
            } else {
                $row = clone $rowPrototype;
            }

            $row->setData($rowData);
            $rowCollection->addRow($row);
        }

        return $rowCollection;
    }
}
