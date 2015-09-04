<?php

namespace PHPixie\AuthORM\Repositories\Type;

abstract class Login extends    \PHPixie\AuthORM\Repositories\Repository
                     implements \PHPixie\Auth\Repositories\Repository\Type\Login
{
    public function getByLogin($login)
    {
        $query = $this->query();
        foreach($this->loginFields() as $field) {
            $query->orWhere($field, $login);
        }
        
        return $query->findOne();
    }
    
    abstract protected function loginFields();
}