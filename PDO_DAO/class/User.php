<?php

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

    public function loadById($id)
    {
        $sql = new Sql();

        $results = $sql->select("SELECT * FROM user WHERE id = :ID", array(
            ":ID"=>$id
        ));

        if (!empty($results)){

            $row = $results[0];

            $this->setId($row['id']);
            $this->setUsername($row['username']);
            $this->setPassword($row['password']);
            $this->setDateRegister($row['date_register']);
            
        }
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
