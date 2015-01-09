<?php

namespace Row;

use Row\Strategy\Collection as StrategyCollection;
use Row\Strategy\HashMap;

class Factory
{
    private $strategyCollection;

    private $strategyHashMap;

    public function __construct(StrategyCollection $collection, HashMap $hashMap)
    {
        $this->strategyCollection = $collection;
        $this->strategyHashMap = $hashMap;
    }

    public function create(array $data)
    {
        $rowClassName = $this->strategyHashMap->getClassMatchingStrategyName($this->whichStrategyMatchesData($data));
        if (class_exists($rowClassName)) {
            return new $rowClassName();
        }
    }

    private function whichStrategyMatchesData(array $data)
    {
        /** @var \Row\Strategy\StrategyInterface $strategy */
        foreach ($this->strategyCollection as $strategy) {
            if ($strategy->doesThisMatchTheData($data)) {
                return get_class($strategy);
            }
        }
    }
}
