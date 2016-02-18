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
     * @inheritDoc
     */
    public function current()
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
     * @inheritDoc
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * @inheritDoc
     */
    public function valid()
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
     * @inheritDoc
     */
    public function count()
    {
        return count($this->jobs);
    }
}
