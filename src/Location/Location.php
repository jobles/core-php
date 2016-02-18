<?php

namespace Jobles\Core\Location;

use Phine\Country\CountryInterface;

class Location implements LocationInterface
{
    /**
     * @var CountryInterface
     */
    private $country;

    public function __construct(CountryInterface $country)
    {
        $this->country = $country;
    }

    /**
     * @return CountryInterface
     */
    public function getCountry()
    {
        return $this->country;
    }

    /* LocationInterface */

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->country->getAlpha2Code();
    }
}
