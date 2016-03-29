<?php

namespace Jobles\Tests\Core\Index;

use Jobles\Core\Index\Index;
use Jobles\Core\Index\IndexCollection;
use Jobles\Core\Iterator;

class IndexCollectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var IndexCollection
     */
    private $collection;

    /**
     * @var Index
     */
    private $index;

    public function setUp()
    {
        $this->collection = new IndexCollection;
        $this->index = new Index('index_key', 'index_name', 'index_url', 'index_affid');
    }

    public function testAddPushInstanceIntoArrayData()
    {
        $this->collection->add($this->index);

        $this->assertAttributeContains($this->index, 'data', $this->collection);
    }

    public function testAddJobIncrementsSizeAttribute()
    {
        $this->collection->add($this->index);

        $this->assertAttributeEquals(1, 'size', $this->collection);
    }

    public function testPickRetrievesExpectedJob()
    {
        $this->collection->add($this->index);

        $this->assertEquals($this->index, $this->collection->pick(0));
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

        $this->collection->add($this->index);

        $this->assertEquals(1, $this->collection->count());
    }

    public function testGetIteratorForJobCollection()
    {
        $this->assertInstanceOf(Iterator::class, $this->collection->getIterator());
    }

    public function testAddShouldThrowInvalidArgumentExceptionWhenAddingInvalidObjectToArrayData()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Object is not an instance of ' . Index::class);

        $this->collection->add(new \stdClass);
    }
}
