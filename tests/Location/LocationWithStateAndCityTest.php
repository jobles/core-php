<?php

namespace Jobles\Tests\Core\Location;

use Jobles\Core\Location\LocationWithStateAndCity;
use Phine\Country\Country;
use Phine\Country\Subdivision;

class LocationWithStateAndCityTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var LocationWithStateAndCity
     */
    private $location;

    public function setUp()
    {
        $country = new Country('BR', 'BRA', 'Republica Federativa do Brasil', 123, 'Brasil');
        $state = new Subdivision('SP', 'São Paulo');
        $this->location = new LocationWithStateAndCity($country, $state, 'São Paulo');
    }

    public function testGetCity()
    {
        $this->assertEquals('São Paulo', $this->location->getCity());
    }

    public function testGetLocation()
    {
        $this->assertEquals('São Paulo - SP', $this->location->getLocation());
    }
}
