<?php

namespace Jobles\Core\Job;

class JobCollection implements \IteratorAggregate, \Countable
{
    /**
     * @var array
     */
    private $jobs = [];

    /**
     * @var int
     */
    private $size = 0;

    /**
     * @param Job $job
     */
    public function addJob(Job $job)
    {
        $this->jobs[] = $job;
        $this->size++;
    }

    /**
     * @param $position
     * @return Job
     * @throws \LengthException
     */
    public function pick($position)
    {
        if (isset($this->jobs[$position])) {
            return $this->jobs[$position];
        }

        throw new \LengthException('Invalid job position: ' . $position);
    }

    /**
     * @inheritDoc
     */
    public function count()
    {
        return $this->size;
    }

    /**
     * @inheritDoc
     */
    public function getIterator()
    {
        return new JobIterator($this);
    }
}
