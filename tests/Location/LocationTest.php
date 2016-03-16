<?php

namespace Jobles\Tests\Core\Location;

use Jobles\Core\Location\Location;
use Phine\Country\Country;
use Phine\Country\CountryInterface;

class LocationTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Location
     */
    private $location;

    public function setUp()
    {
        $country = new Country('BR', 'BRA', 'Republica Federativa do Brasil', 123, 'Brasil');
        $this->location = new Location($country);
    }

    public function testGetCountry()
    {
        $this->assertInstanceOf(CountryInterface::class, $this->location->getCountry());
        $this->assertEquals('BR', $this->location->getCountry()->getAlpha2Code());
        $this->assertEquals('BRA', $this->location->getCountry()->getAlpha3Code());
        $this->assertEquals('Republica Federativa do Brasil', $this->location->getCountry()->getLongName());
        $this->assertEquals('Brasil', $this->location->getCountry()->getShortName());
        $this->assertEquals(123, $this->location->getCountry()->getNumericCode());
    }

    public function testGetLocation()
    {
        $this->assertEquals('BR', $this->location->getLocation());
    }
}
