<?php

class Document{
    private $number;

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }
}

//Inheritance
class Cpf extends Document{

    public function check():bool
    {
        $cpfNumber = $this->getNumber();
        return true;
    }
}