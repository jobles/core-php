<?php

namespace Jobles\Tests\Core\Job;

use Jobles\Core\Job\Job;

class JobTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Job
     */
    private $job;

    public function setUp()
    {
        $this->job = new Job;
        $this->job->setKey('job_key');
        $this->job->setTitle('Analista de Sistema para Software de RH');
        $this->job->setDate(new \DateTime('Sat, 13 Feb 2016 08:59:39 GMT'));
        $this->job->setSnippet('Principais atribuições do cargo...');
        $this->job->setViewUrl('http://job.url/pt-br/job-12345');
        $this->job->setSource('www.ceviu.com.br');
        $this->job->setCompany('Mega Enterprise, Co');
        $this->job->setSalaryCurrencyCode('BRL');
        $this->job->setSalaryMin(1000);
        $this->job->setSalaryMax(2000);
        $this->job->setCity('Sao Paulo');
        $this->job->setState('SP');
        $this->job->setCountry('Brasil');
    }

    public function testGetKey()
    {
        $this->assertEquals('job_key', $this->job->getKey());
    }

    public function testGetTitle()
    {
        $this->assertEquals('Analista de Sistema para Software de RH', $this->job->getTitle());
    }

    public function testGetDate()
    {
        $this->assertEquals('2016-02-13 08:59:39', $this->job->getDate()->format('Y-m-d H:i:s'));
    }

    public function testGetSnippet()
    {
        $this->assertEquals('Principais atribuições do cargo...', $this->job->getSnippet());
    }

    public function testGetViewUrl()
    {
        $this->assertEquals('http://job.url/pt-br/job-12345', $this->job->getViewUrl());
    }

    public function testGetSource()
    {
        $this->assertEquals('www.ceviu.com.br', $this->job->getSource());
    }

    public function testGetCompany()
    {
        $this->assertEquals('Mega Enterprise, Co', $this->job->getCompany());
    }

    public function testGetSalaryCurrencyCode()
    {
        $this->assertEquals('BRL', $this->job->getSalaryCurrencyCode());
    }

    public function testGetSalaryMin()
    {
        $this->assertEquals(1000, $this->job->getSalaryMin());
    }

    public function testGetSalaryMax()
    {
        $this->assertEquals(2000, $this->job->getSalaryMax());
    }

    public function testGetCity()
    {
        $this->assertEquals('Sao Paulo', $this->job->getCity());
    }

    public function testGetState()
    {
        $this->assertEquals('SP', $this->job->getState());
    }

    public function testGetCountry()
    {
        $this->assertEquals('Brasil', $this->job->getCountry());
    }
}
