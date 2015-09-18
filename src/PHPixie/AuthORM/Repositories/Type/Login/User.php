<?php

namespace PHPixie\AuthORM\Repositories\Type\Login;

abstract class User extends    \PHPixie\AuthORM\Repositories\Repository\User
                    implements \PHPixie\AuthLogin\Repository\User
{
    abstract public function passwordHash();
}