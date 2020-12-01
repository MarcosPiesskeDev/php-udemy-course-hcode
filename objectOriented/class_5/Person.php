<?php

class Person
{
    public $name = 'Example_name';
    protected $age = 22;
    private $password = '123456';

    public function showData()
    {
        echo $this->name."<br>";
        echo $this->age."<br>";
        echo $this->password."<br>";
    }
}