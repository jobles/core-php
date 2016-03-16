<?php

namespace Jobles\Tests\Core\Job;

use Jobles\Core\Job\Job;
use Jobles\Core\Job\JobCollection;
use Jobles\Core\Job\JobIterator;

class JobCollectionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var JobCollection
     */
    private $collection;

    public function setUp()
    {
        $this->collection = new JobCollection;
    }

    public function testAddJobPushJobIntoJobsArray()
    {
        $job = new Job;
        $this->collection->addJob($job);

        $this->assertAttributeContains($job, 'jobs', $this->collection);
    }

    public function testAddJobIncrementsSizeAttribute()
    {
        $job = new Job;
        $this->collection->addJob($job);

        $this->assertAttributeEquals(1, 'size', $this->collection);
    }

    public function testPickRetrievesExpectedJob()
    {
        $job = new Job;
        $this->collection->addJob($job);

        $this->assertEquals($job, $this->collection->pick(0));
    }

    public function testPickThrowsLengthExceptionOnInvalidPosition()
    {
        $this->expectException(\LengthException::class);
        $this->expectExceptionMessage('Invalid job position: 0');
        $this->collection->pick(0);
    }

    public function testCountReturnsCorrectSize()
    {
        $this->assertEquals(0, $this->collection->count());

        $job = new Job;
        $this->collection->addJob($job);

        $this->assertEquals(1, $this->collection->count());
    }

    public function testGetIteratorForJobCollection()
    {
        $this->assertInstanceOf(JobIterator::class, $this->collection->getIterator());
    }
}
