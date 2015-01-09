<?php

namespace Row;

class Factory
{
    private $strategies = array(

    );

    public function create($data)
    {
        return new Accident($data);
    }
}
