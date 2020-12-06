<?php

namespace models\User;

class User{
    private $id;
    private $username;
    private $password;
    private $dateRegister;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getDateRegister()
    {
        return $this->dateRegister;
    }

    public function setDateRegister($dateRegister)
    {
        $this->dateRegister = $dateRegister;
    }
    
    public function __toString()
    {
        return json_encode(array(
            "id"=>$this->getId(),
            "username"=>$this->getUsername(),
            "password"=>$this->getPassword(),
            "date_register"=>$this->getDateRegister(),
        ));
    }
}
