<?php

namespace Jobles\Core\Location;

use Phine\Country\CountryInterface;
use Phine\Country\SubdivisionInterface;

class LocationWithState extends Location implements LocationInterface
{
    /**
     * @var SubdivisionInterface
     */
    private $state;

    public function __construct(CountryInterface $country, SubdivisionInterface $state)
    {
        parent::__construct($country);

        $this->state = $state;
    }

    /**
     * @return SubdivisionInterface
     */
    public function getState()
    {
        return $this->state;
    }

    /* LocationInterface */

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->state->getCode();
    }
}
