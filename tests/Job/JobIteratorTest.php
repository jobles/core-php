<?php

namespace Jobles\Tests\Core\Job;

use Jobles\Core\Job\Job;
use Jobles\Core\Job\JobCollection;
use Jobles\Core\Job\JobIterator;

class JobIteratorTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var JobIterator
     */
    private $iterator;

    public function setUp()
    {
        $jobCollection = new JobCollection;

        $job = new Job;
        $job->setTitle('Job 1');
        $jobCollection->addJob($job);

        $job = new Job;
        $job->setTitle('Job 2');
        $jobCollection->addJob($job);

        $this->iterator = new JobIterator($jobCollection);
    }

    public function testConstructionWithJobCollection()
    {
        $this->assertAttributeInstanceOf(JobCollection::class, 'jobs', $this->iterator);
    }

    public function testCurrentGetsFirstJobOnFirstMethodCall()
    {
        $job = $this->iterator->current();
        $this->assertInstanceOf(Job::class, $job);
        $this->assertEquals('Job 1', $job->getTitle());
    }

    public function testNextAdvancesPositionCursor()
    {
        $this->iterator->next();
        $this->assertAttributeEquals(1, 'position', $this->iterator);
    }

    public function testCurrentGetsSecondJobAfterCallingNextMethod()
    {
        $this->iterator->next();
        $job = $this->iterator->current();
        $this->assertInstanceOf(Job::class, $job);
        $this->assertEquals('Job 2', $job->getTitle());
    }

    public function testKeyReturnsExpectedPosition()
    {
        $this->assertAttributeEquals(0, 'position', $this->iterator);
        $this->iterator->next();
        $this->assertAttributeEquals(1, 'position', $this->iterator);
    }

    public function testValidReturnsTrueWhilePositionLessOrEqualJobCount()
    {
        $this->assertTrue($this->iterator->valid());
        $this->iterator->next();
        $this->assertTrue($this->iterator->valid());
    }

    public function testValidReturnsFalseWhenPositionGreaterThanJobCount()
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
