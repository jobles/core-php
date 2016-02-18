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
    public function current()
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
     * @inheritDoc
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * @inheritDoc
     */
    public function valid()
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
     * @inheritDoc
     */
    public function count()
    {
        return $this->locations->count();
    }
}
