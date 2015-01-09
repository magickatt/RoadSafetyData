<?php

namespace Row\Strategy;

interface StrategyInterface
{
    /**
     * @return boolean
     */
    public function doesThisMatchTheData(array $data);
}