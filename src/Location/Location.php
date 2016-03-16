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
    public function getCountry() : CountryInterface
    {
        return $this->country;
    }

    /* LocationInterface */

    /**
     * @return string
     */
    public function getLocation() : string
    {
        return $this->country->getAlpha2Code();
    }
}
