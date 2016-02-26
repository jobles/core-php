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
    private $salaryCurrencyCode;

    /**
     * @var string
     */
    private $salaryMin;

    /**
     * @var string
     */
    private $salaryMax;

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
    public function getKey() : string
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return Job
     */
    public function setKey(string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return Index
     */
    public function getIndex() : Index
    {
        return $this->index;
    }

    /**
     * @param Index $index
     * @return Job
     */
    public function setIndex(Index $index) : Job
    {
        $this->index = $index;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Job
     */
    public function setTitle(string $title) : Job
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompany() : string
    {
        return $this->company;
    }

    /**
     * @param string $company
     * @return Job
     */
    public function setCompany(string $company) : Job
    {
        $this->company = $company;

        return $this;
    }

    /**
     * @return string
     */
    public function getSalaryCurrencyCode() : string
    {
        return $this->salaryCurrencyCode;
    }

    /**
     * @param string $salaryCurrencyCode
     * @return Job
     */
    public function setSalaryCurrencyCode(string $salaryCurrencyCode) : Job
    {
        $this->salaryCurrencyCode = $salaryCurrencyCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getSalaryMin() : string
    {
        return $this->salaryMin;
    }

    /**
     * @param string $salaryMin
     * @return Job
     */
    public function setSalaryMin(string $salaryMin) : Job
    {
        $this->salaryMin = $salaryMin;

        return $this;
    }

    /**
     * @return string
     */
    public function getSalaryMax() : string
    {
        return $this->salaryMax;
    }

    /**
     * @param string $salaryMax
     * @return Job
     */
    public function setSalaryMax(string $salaryMax) : Job
    {
        $this->salaryMax = $salaryMax;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Job
     */
    public function setCity(string $city) : Job
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return Job
     */
    public function setState(string $state) : Job
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry() : string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return Job
     */
    public function setCountry(string $country) : Job
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource() : string
    {
        return $this->source;
    }

    /**
     * @param string $source
     * @return Job
     */
    public function setSource(string $source) : Job
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate() : \DateTime
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     * @return Job
     */
    public function setDate(\DateTime $date) : Job
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return string
     */
    public function getSnippet() : string
    {
        return $this->snippet;
    }

    /**
     * @param string $snippet
     * @return Job
     */
    public function setSnippet(string $snippet) : Job
    {
        $this->snippet = $snippet;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Job
     */
    public function setDescription(string $description) : Job
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getViewUrl() : string
    {
        return $this->viewUrl;
    }

    /**
     * @param string $viewUrl
     * @return Job
     */
    public function setViewUrl(string $viewUrl) : Job
    {
        $this->viewUrl = $viewUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getApplyUrl() : string
    {
        return $this->applyUrl;
    }

    /**
     * @param string $applyUrl
     * @return Job
     */
    public function setApplyUrl(string $applyUrl) : Job
    {
        $this->applyUrl = $applyUrl;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isFeatured() : bool
    {
        return $this->featured;
    }

    /**
     * @param bool $featured
     * @return Job
     */
    public function setFeatured(bool $featured) : Job
    {
        $this->featured = $featured;

        return $this;
    }
}
