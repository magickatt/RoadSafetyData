<?php

namespace Row;

abstract class AbstractRow implements RowInterface
{
    protected $data = array();

    public function __construct(array $data = array())
    {
        if (! empty($data)) {
            $this->setData($data);
        }
    }

    public function setData(array $data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}
