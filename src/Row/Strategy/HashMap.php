<?php

namespace Row\Strategy;

class HashMap
{
    private $hashMap = array(
        'Accident' => '\Row\Accident',
        'Casualty' => '\Row\Casualty',
        'Vehicle' => '\Row\Vehicle'
    );

    public function getClassMatchingStrategyName($strategyClassName)
    {
        $strategyClassName = $this->stripNamespace($strategyClassName);
        if (array_key_exists($strategyClassName, $this->hashMap)) {
            return $this->hashMap[$strategyClassName];
        }
    }

    private function stripNamespace($strategyClassName)
    {
        return end(explode('\\', $strategyClassName));
    }
}
