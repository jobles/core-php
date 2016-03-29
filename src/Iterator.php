<?php

namespace Jobles\Core;

final class Iterator implements \Iterator, \Countable
{

    /**
     * @var int
     */
    private $position = 0;

    /**
     * @var AbstractCollection
     */
    private $data;

    public function __construct(AbstractCollection $collection)
    {
        $this->data = $collection;
    }

    /**
     * @return mixed
     */
    public function current()
    {
        return $this->data->pick($this->position);
    }

    /**
     * @inheritDoc
     */
    public function next()
    {
        ++$this->position;
    }

    /**
     * @return int
     */
    public function key() : int
    {
        return $this->position;
    }

    /**
     * @return bool
     */
    public function valid() : bool
    {
        return $this->position < $this->count();
    }

    /**
     * @return int
     */
    public function count() : int
    {
        return count($this->data);
    }

    /**
     * @inheritDoc
     */
    public function rewind()
    {
        $this->position = 0;
    }
}
