<?php

namespace Jobles\Core\Job;

class JobIterator implements \Iterator, \Countable
{
    /**
     * @var int
     */
    private $position = 0;

    /**
     * @var JobCollection
     */
    private $jobs;

    public function __construct(JobCollection $jobCollection)
    {
        $this->jobs = $jobCollection;
    }

    /**
     * @return Job
     */
    public function current() : Job
    {
        return $this->jobs->pick($this->position);
    }

    /**
     * @inheritDoc
     */
    public function next()
    {
        ++$this->position;
    }

    /**
     * @return int
     */
    public function key() : int
    {
        return $this->position;
    }

    /**
     * @return bool
     */
    public function valid() : bool
    {
        return $this->position < $this->count();
    }

    /**
     * @inheritDoc
     */
    public function rewind()
    {
        $this->position = 0;
    }

    /**
     * @return int
     */
    public function count() : int
    {
        return count($this->jobs);
    }
}
