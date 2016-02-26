<?php

namespace Jobles\Core\Location;

class LocationIterator implements \Iterator, \Countable
{
    /**
     * @var int
     */
    private $position = 0;

    /**
     * @var LocationCollection
     */
    private $locations;

    public function __construct(LocationCollection $locationCollection)
    {
        $this->locations = $locationCollection;
    }

    /**
     * @inheritDoc
     */
    public function current() : LocationInterface
    {
        return $this->locations->pick($this->position);
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
        return $this->position < $this->locations->count();
    }

    /**
     * @inheritDoc
     */
    public function rewind()
    {
        $this->position = 0;
    }

    /**
     * @return int
     */
    public function count() : int
    {
        return $this->locations->count();
    }
}
