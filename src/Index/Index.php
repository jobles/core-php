<?php

namespace Jobles\Core\Index;

final class Index
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $affiliateId;

    public function __construct($key, $name, $url, $affiliateId)
    {
        $this->key = $key;
        $this->name = $name;
        $this->url = $url;
        $this->affiliateId = $affiliateId;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getAffiliateId()
    {
        return $this->affiliateId;
    }
}
