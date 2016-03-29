<?php

namespace Jobles\Core;

abstract class AbstractCollection implements \IteratorAggregate, \Countable
{

    /**
     * @var mixed
     */
    protected $class;

    /**
     * @var array
     */
    private $data = [];

    /**
     * @var int
     */
    private $size = 0;

    /**
     * @param $object
     */
    public function add($object)
    {
        $this->validateObjectInstance($object);
        $this->data[] = $object;
        $this->size++;
    }

    /**
     * @param int $position
     *
     * @return mixed
     * @throws \LengthException
     */
    public function pick(int $position)
    {
        if (isset($this->data[$position])) {
            return $this->data[$position];
        }

        throw new \LengthException('Invalid index position: ' . $position);
    }

    /**
     * @return int
     */
    public function count() : int
    {
        return $this->size;
    }

    /**
     * @return Iterator
     */
    public function getIterator() : Iterator
    {
        return new Iterator($this);
    }

    /**
     * @param mixed $object
     */
    private function validateObjectInstance($object)
    {
        if (!$object instanceof $this->class) {
            throw new \InvalidArgumentException('Object is not an instance of ' . $this->class);
        }
    }
}
