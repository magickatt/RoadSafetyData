<?php

namespace Row;

abstract class AbstractRow implements RowInterface
{
    private $data = array();

    public function __construct(array $data)
    {
        $this->data = $data;
    }
}
