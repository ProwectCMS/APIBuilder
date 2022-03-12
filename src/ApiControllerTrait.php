<?php

namespace ProwectCMS\ApiBuilder;

use Spatie\QueryBuilder\QueryBuilder;

trait ApiControllerTrait
{
    abstract protected function getQueryBuilder() : QueryBuilder;

    protected function getAllPaginated($limit = 25)
    {
        return $this->getQueryBuilder()->paginate($limit);
    }

    protected function getSingle($query)
    {
        return $this->getQueryBuilder($query)->first();
    }
}