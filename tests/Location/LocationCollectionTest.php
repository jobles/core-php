<?php

namespace Jobles\Tests\Core\Location;

use Jobles\Core\Location\Location;
use Jobles\Core\Location\LocationCollection;
use Jobles\Core\Location\LocationIterator;
use Phine\Country\Country;

class LocationCollectionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var LocationCollection
     */
    private $collection;

    public function setUp()
    {
        $this->collection = new LocationCollection;
    }

    public function testAddLocationPushLocationIntoLocationsArray()
    {
        $location = new Location(new Country('BR', 'BRA', 'Republica Federativa do Brasil', 123, 'Brasil'));
        $this->collection->addLocation($location);

        $this->assertAttributeContains($location, 'locations', $this->collection);
    }

    public function testAddLocationIncrementsSizeAttribute()
    {
        $location = new Location(new Country('BR', 'BRA', 'Republica Federativa do Brasil', 123, 'Brasil'));
        $this->collection->addLocation($location);

        $this->assertAttributeEquals(1, 'size', $this->collection);
    }

    public function testPickRetrievesExpectedLocation()
    {
        $location = new Location(new Country('BR', 'BRA', 'Republica Federativa do Brasil', 123, 'Brasil'));
        $this->collection->addLocation($location);

        $this->assertEquals($location, $this->collection->pick(0));
    }

    public function testPickThrowsLengthExceptionOnInvalidPosition()
    {
        $this->expectException(\LengthException::class);
        $this->expectExceptionMessage('Invalid location position: 0');
        $this->collection->pick(0);
    }

    public function testCountReturnsCorrectSize()
    {
        $this->assertEquals(0, $this->collection->count());

        $location = new Location(new Country('BR', 'BRA', 'Republica Federativa do Brasil', 123, 'Brasil'));
        $this->collection->addLocation($location);

        $this->assertEquals(1, $this->collection->count());
    }

    public function testGetIteratorForJobCollection()
    {
        $this->assertInstanceOf(LocationIterator::class, $this->collection->getIterator());
    }
}
