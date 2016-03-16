<?php

namespace Jobles\Tests\Core\Index;

use Jobles\Core\Index\Index;

class IndexTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Index
     */
    private $index;

    public function setUp()
    {
        $this->index = new Index('index_key', 'Index Name', 'http://index.url', 'affId');
    }

    public function testGetKey()
    {
        $this->assertEquals('index_key', $this->index->getKey());
    }

    public function testGetName()
    {
        $this->assertEquals('Index Name', $this->index->getName());
    }

    public function testGetUrl()
    {
        $this->assertEquals('http://index.url', $this->index->getUrl());
    }

    public function testGetAffiliateId()
    {
        $this->assertEquals('affId', $this->index->getAffiliateId());
    }
}
