<?php

namespace Jobles\Core\Location;

class LocationCollection implements \IteratorAggregate, \Countable
{
    /**
     * @var array
     */
    private $locations = [];

    /**
     * @var int
     */
    private $size = 0;

    /**
     * @param LocationInterface $location
     */
    public function addLocation(LocationInterface $location)
    {
        $this->locations[] = $location;
        $this->size++;
    }

    /**
     * @param int $position
     * @return LocationInterface
     * @throws \LengthException
     */
    public function pick(int $position) : LocationInterface
    {
        if (isset($this->locations[$position])) {
            return $this->locations[$position];
        }

        throw new \LengthException('Invalid location position: ' . $position);
    }

    /**
     * @return int
     */
    public function count() : int
    {
        return $this->size;
    }

    /**
     * @return LocationIterator
     */
    public function getIterator() : LocationIterator
    {
        return new LocationIterator($this);
    }
}
