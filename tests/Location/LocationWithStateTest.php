<?php

namespace Jobles\Tests\Core\Location;

use Jobles\Core\Location\LocationWithState;
use Phine\Country\Country;
use Phine\Country\Subdivision;
use Phine\Country\SubdivisionInterface;

class LocationWithStateTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var LocationWithState
     */
    private $location;

    public function setUp()
    {
        $country = new Country('BR', 'BRA', 'Republica Federativa do Brasil', 123, 'Brasil');
        $state = new Subdivision('SP', 'São Paulo');
        $this->location = new LocationWithState($country, $state);
    }

    public function testGetState()
    {
        $this->assertInstanceOf(SubdivisionInterface::class, $this->location->getState());
        $this->assertEquals('SP', $this->location->getState()->getCode());
        $this->assertEquals('São Paulo', $this->location->getState()->getName());
    }

    public function testGetLocation()
    {
        $this->assertEquals('SP', $this->location->getLocation());
    }
}
