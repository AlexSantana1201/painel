<?php

namespace app\model;

class users
{

    private $name;
    private $email;


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
         $this->name = $name;
    }

    public function getEmail()
    {
        return $this->name;
    }

    public function setEmail($email)
    {
        return $this->email = $email;
    }
}
