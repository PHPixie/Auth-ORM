<?php

namespace PHPixie\AuthORM\Repositories\Type\Login;

abstract class User extends    \PHPixie\AuthORM\Repositories\Repository\User
                    implements \PHPixie\AuthLogin\Repository\User
{
    /**
     * @return string
     */
    abstract public function passwordHash();
}