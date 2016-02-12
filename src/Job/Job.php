<?php

namespace Jobles\Core\Job;

use Jobles\Core\Index\Index;

final class Job
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var Index
     */
    private $index;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $salary;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $source;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $snippet;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $viewUrl;

    /**
     * @var string
     */
    private $applyUrl;

    /**
     * @var bool
     */
    private $featured;

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return Job
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return Index
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param Index $index
     * @return Job
     */
    public function setIndex(Index $index)
    {
        $this->index = $index;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Job
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param string $company
     * @return Job
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * @return string
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param string $salary
     * @return Job
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Job
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return Job
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return Job
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $source
     * @return Job
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     * @return Job
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return string
     */
    public function getSnippet()
    {
        return $this->snippet;
    }

    /**
     * @param string $snippet
     * @return Job
     */
    public function setSnippet($snippet)
    {
        $this->snippet = $snippet;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Job
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getViewUrl()
    {
        return $this->viewUrl;
    }

    /**
     * @param string $viewUrl
     * @return Job
     */
    public function setViewUrl($viewUrl)
    {
        $this->viewUrl = $viewUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getApplyUrl()
    {
        return $this->applyUrl;
    }

    /**
     * @param string $applyUrl
     * @return Job
     */
    public function setApplyUrl($applyUrl)
    {
        $this->applyUrl = $applyUrl;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isFeatured()
    {
        return $this->featured;
    }

    /**
     * @param boolean $featured
     * @return Job
     */
    public function setFeatured($featured)
    {
        $this->featured = $featured;

        return $this;
    }
}
