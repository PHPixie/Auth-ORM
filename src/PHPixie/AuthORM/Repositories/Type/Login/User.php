<?php

namespace PHPixie\AuthORM\Repositories\Type\Login;

abstract class User extends    \PHPixie\AuthORM\Repositories\Repository\User
                    implements \PHPixie\Auth\Repositories\Repository\Type\Login\User
{
    abstract public function passwordHash();
}