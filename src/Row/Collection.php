<?php

namespace Row;

class Collection implements \ArrayAccess
{
    /** @var RowInterface[] */
    private $rows = array();

    public function __construct(array $rows = array())
    {
        if (! empty($rows)) {
            foreach ($rows as $row) {
                $this->addRow($row);
            }
        }
    }

    /**
     * Whether a offset exists
     * @link http://php.net/manual/en/arrayaccess.offsetexists.php
     * @param mixed $offset An offset to check for.
     * @return boolean true on success or false on failure.
     */
    public function offsetExists($offset)
    {
        if (isset($this->rows[$offset])) {
            return true;
        }
        return false;
    }

    /**
     * Offset to retrieve
     * @link http://php.net/manual/en/arrayaccess.offsetget.php
     * @param mixed $offset The offset to retrieve.
     * @return mixed Can return all value types.
     */
    public function offsetGet($offset)
    {
        if ($this->offsetExists($offset)) {
            return $this->rows[$offset];
        }
    }

    /**
     * Offset to set
     * @link http://php.net/manual/en/arrayaccess.offsetset.php
     * @param mixed $offset The offset to assign the value to.
     * @param mixed $value The value to set.
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->addRow($value, $offset);
    }

    /**
     * Offset to unset
     * @link http://php.net/manual/en/arrayaccess.offsetunset.php
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        if ($this->offsetExists($offset)) {
            unset($this->rows[$offset]);
        }
    }

    public function addRow(RowInterface $row, $offset = null)
    {
        if (! is_null($offset)) {
            $this->rows[$offset] = $row;
        } else {
            $this->rows[] = $row;
        }
    }

    public function getFirstRow()
    {
        return $this->offsetGet(0);
    }
}
