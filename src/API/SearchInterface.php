<?php

namespace Jobles\Core\API;

use Jobles\Core\Job\JobCollection;

interface SearchInterface
{

    /**
     * @param array $filters
     *
     * @return JobCollection
     */
    public function search(array $filters) : JobCollection;
}
