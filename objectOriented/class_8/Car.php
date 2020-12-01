<?php

abstract class Car implements Vehicle{

    private $model;
    private $engine;
    private $year;

    public function accelerate($speed)
    {
        echo "The vehicle accelerates until {$speed} mph";
    }
    public function break($speed)
    {
        echo "The vehicle breaks until {$speed} mph";
    }
    public function gearshift($gear)
    {
        echo "The vehicle gearshifts to {$gear}";
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getEngine()
    {
        return $this->engine;
    }

    public function setEngine($engine)
    {
        $this->engine = $engine;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getAllAtributes()
    {
        return [
            "model"=>$this->getModel(),
            "engine"=>$this->getEngine(),
            "year"=>$this->getYear()
        ];
    }
}