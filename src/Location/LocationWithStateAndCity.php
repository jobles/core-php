<?php

namespace Jobles\Core\Location;

use Phine\Country\CountryInterface;
use Phine\Country\SubdivisionInterface;

class LocationWithStateAndCity extends LocationWithState implements LocationInterface
{
    /**
     * @var string
     */
    private $city;

    public function __construct(CountryInterface $country, SubdivisionInterface $state, $city)
    {
        parent::__construct($country, $state);

        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }

    /* LocationInterface */

    /**
     * @return string
     */
    public function getLocation() : string
    {
        return $this->city . ' - ' . parent::getLocation();
    }
}
