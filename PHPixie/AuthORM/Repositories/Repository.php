<?php

namespace PHPixie\AuthORM\Repositories;

abstract class Repository extends    \PHPixie\ORM\Wrappers\Type\Database\Repository
                          implements \PHPixie\Auth\Repositories\Repository
{
    public function getById($id)
    {
        return $this->query()->in($id)->findOne();
    }
}