<?php

namespace PHPixie\AuthORM\Repositories\Type;

abstract class Login extends    \PHPixie\AuthORM\Repositories\Repository
                     implements \PHPixie\AuthLogin\Repository
{
    /**
     * @param $login
     * @return Login\User
     */
    public function getByLogin($login)
    {
        $query = $this->query();
        foreach($this->loginFields() as $field) {
            $query->orWhere($field, $login);
        }
        
        return $query->findOne();
    }

    /**
     * @return array
     */
    abstract protected function loginFields();
}