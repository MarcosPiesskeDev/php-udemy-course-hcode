<?php

class Adress
{
    private string $streetName;
    private string $cityName;
    private int $houseNumber;

    //You could create your data while you're calling object.
    public function __construct($streetName, $cityName, $houseNumber)
    {
        $this->streetName = $streetName;
        $this->cityName = $cityName;
        $this->houseNumber = $houseNumber;
    }
    
    //It's useful when you want to clear your variables, and memory process, like disconnect from database. 
    public function __destruct()
    {
        var_dump('DESTRUCTION');
    }

    //To string will be called when you instance your object directly.
    public function __toString()
    {
        return $this->streetName.", ".$this->cityName.", ".$this->houseNumber;
    }

    public function getStreetName()
    {
        return $this->streetName;
    }

    public function setStreetName($streetName)
    {
        $this->streetName = $streetName;
    }

    public function getCityName()
    {
        return $this->cityName;
    }

    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
    }

    public function getHouseNumber()
    {
        return $this->houseNumber;
    }

    public function setHouseNumber($houseNumber)
    {
        $this->houseNumber = $houseNumber;
    }
}