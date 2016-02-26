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
     * @param int $position
     * @return Job
     * @throws \LengthException
     */
    public function pick(int $position) : Job
    {
        if (isset($this->jobs[$position])) {
            return $this->jobs[$position];
        }

        throw new \LengthException('Invalid job position: ' . $position);
    }

    /**
     * @return int
     */
    public function count() : int
    {
        return $this->size;
    }

    /**
     * @return JobIterator
     */
    public function getIterator() : JobIterator
    {
        return new JobIterator($this);
    }
}
