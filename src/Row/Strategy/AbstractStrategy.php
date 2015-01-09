<?php

namespace Row\Strategy;

abstract class AbstractStrategy implements StrategyInterface
{
    protected $markers = array();

    public function __construct()
    {
        if (empty($this->markers)) {
            throw new \Exception('Cannot extend Row\Strategy\AbstractStrategy without adding at least 1 scalar value to
            markers array property');
        }
    }

    /**
     * @return boolean
     */
    public function doesThisMatchTheData(array $data)
    {
        foreach ($this->markers as $marker) {
            if (in_array($marker, $data)) {
                return true;
            }
        }
        return false;
    }
}
