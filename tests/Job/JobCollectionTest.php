<?php

namespace Jobles\Tests\Core\Job;

use Jobles\Core\Iterator;
use Jobles\Core\Job\Job;
use Jobles\Core\Job\JobCollection;

class JobCollectionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var JobCollection
     */
    private $collection;

    public function setUp()
    {
        $this->collection = new JobCollection;
        $this->job = new Job;
    }

    public function testAddJobPushJobIntoJobsArray()
    {
        $this->collection->add($this->job);

        $this->assertAttributeContains($this->job, 'data', $this->collection);
    }

    public function testAddJobIncrementsSizeAttribute()
    {
        $this->collection->add($this->job);

        $this->assertAttributeEquals(1, 'size', $this->collection);
    }

    public function testPickRetrievesExpectedJob()
    {
        $this->collection->add($this->job);

        $this->assertEquals($this->job, $this->collection->pick(0));
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

        $this->collection->add($this->job);

        $this->assertEquals(1, $this->collection->count());
    }

    public function testGetIteratorForJobCollection()
    {
        $this->assertInstanceOf(Iterator::class, $this->collection->getIterator());
    }

    public function testAddShouldThrowInvalidArgumentExceptionWhenAddingInvalidObjectToArrayData()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Object is not an instance of ' . Job::class);

        $this->collection->add(new \stdClass);
    }
}
