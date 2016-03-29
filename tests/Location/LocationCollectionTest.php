<?php

namespace Jobles\Tests\Core\Location;

use Jobles\Core\Iterator;
use Jobles\Core\Location\Location;
use Jobles\Core\Location\LocationCollection;
use Jobles\Core\Location\LocationInterface;
use Jobles\Core\Location\LocationIterator;
use Phine\Country\Country;

class LocationCollectionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var LocationCollection
     */
    private $collection;

    /**
     * @var LocationInterface
     */
    private $location;

    public function setUp()
    {
        $this->collection = new LocationCollection;
        $this->location = new Location(new Country('BR', 'BRA', 'Republica Federativa do Brasil', 123, 'Brasil'));
    }

    public function testAddLocationPushLocationIntoLocationsArray()
    {
        $this->collection->add($this->location);

        $this->assertAttributeContains($this->location, 'data', $this->collection);
    }

    public function testAddLocationIncrementsSizeAttribute()
    {
        $this->collection->add($this->location);

        $this->assertAttributeEquals(1, 'size', $this->collection);
    }

    public function testPickRetrievesExpectedLocation()
    {
        $this->collection->add($this->location);

        $this->assertEquals($this->location, $this->collection->pick(0));
    }

    public function testPickThrowsLengthExceptionOnInvalidPosition()
    {
        $this->expectException(\LengthException::class);
        $this->expectExceptionMessage('Invalid index position: 0');
        $this->collection->pick(0);
    }

    public function testCountReturnsCorrectSize()
    {
        $this->assertEquals(0, $this->collection->count());

        $this->collection->add($this->location);

        $this->assertEquals(1, $this->collection->count());
    }

    public function testGetIteratorForJobCollection()
    {
        $this->assertInstanceOf(Iterator::class, $this->collection->getIterator());
    }
}
