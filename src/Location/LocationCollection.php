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
     * @param Location $location
     */
    public function addLocation(Location $location)
    {
        $this->locations[] = $location;
        $this->size++;
    }

    /**
     * @param $position
     * @return LocationInterface
     * @throws \LengthException
     */
    public function pick($position)
    {
        if (isset($this->locations[$position])) {
            return $this->locations[$position];
        }

        throw new \LengthException('Invalid location position: ' . $position);
    }

    /**
     * @inheritDoc
     */
    public function count()
    {
        return $this->size;
    }

    /**
     * @inheritDoc
     */
    public function getIterator()
    {
        return new LocationIterator($this);
    }
}
