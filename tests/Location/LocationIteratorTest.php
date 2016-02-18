<?php

namespace Jobles\Tests\Core\Location;

use Jobles\Core\Location\Location;
use Jobles\Core\Location\LocationCollection;
use Jobles\Core\Location\LocationIterator;
use Jobles\Core\Location\LocationWithState;
use Phine\Country\Country;
use Phine\Country\Subdivision;

class LocationIteratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var LocationIterator
     */
    private $iterator;

    public function setUp()
    {
        $locationCollection = new LocationCollection();
        $country = new Country('BR', 'BRA', 'Republica Federativa do Brasil', 123, 'Brasil');

        $state1 = new Subdivision('SP', 'São Paulo');
        $location = new LocationWithState($country, $state1);
        $locationCollection->addLocation($location);

        $state2 = new Subdivision('RJ', 'Rio de Janeiro');
        $location = new LocationWithState($country, $state2);
        $locationCollection->addLocation($location);

        $this->iterator = new LocationIterator($locationCollection);
    }

    public function testConstructionWithJobCollection()
    {
        $this->assertAttributeInstanceOf(LocationCollection::class, 'locations', $this->iterator);
    }

    public function testCurrentGetsFirstLocationOnFirstMethodCall()
    {
        $location = $this->iterator->current();
        $this->assertInstanceOf(LocationWithState::class, $location);
        $this->assertEquals('SP', $location->getLocation());
    }

    public function testNextAdvancesPositionCursor()
    {
        $this->iterator->next();
        $this->assertAttributeEquals(1, 'position', $this->iterator);
    }

    public function testCurrentGetsSecondLocationAfterCallingNextMethod()
    {
        $this->iterator->next();
        $job = $this->iterator->current();
        $this->assertInstanceOf(LocationWithState::class, $job);
        $this->assertEquals('RJ', $job->getLocation());
    }

    public function testKeyReturnsExpectedPosition()
    {
        $this->assertAttributeEquals(0, 'position', $this->iterator);
        $this->iterator->next();
        $this->assertAttributeEquals(1, 'position', $this->iterator);
    }

    public function testValidReturnsTrueWhilePositionLessOrEqualLocationCount()
    {
        $this->assertTrue($this->iterator->valid());
        $this->iterator->next();
        $this->assertTrue($this->iterator->valid());
    }

    public function testValidReturnsFalseWhenPositionGreaterThanLocationCount()
    {
        $this->iterator->next();
        $this->iterator->next();
        $this->iterator->next();
        $this->assertFalse($this->iterator->valid());
    }

    public function testRewindMovesPositionCursorToFirstPosition()
    {
        $this->iterator->next();
        $this->assertNotEquals(0, $this->iterator->key());

        $this->iterator->rewind();
        $this->assertEquals(0, $this->iterator->key());
    }

    public function testCountReturnsCorrectJobCollectionSize()
    {
        $this->assertEquals(2, $this->iterator->count());
        $this->assertCount(2, $this->iterator);
    }
}
