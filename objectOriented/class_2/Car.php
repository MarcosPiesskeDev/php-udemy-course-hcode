<?php

class Car
{
    private $model;
    private $engine;
    private $year;

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