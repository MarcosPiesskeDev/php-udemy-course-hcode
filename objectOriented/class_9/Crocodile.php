<?php


class Crocodile extends Animal{

    public function move()
    {
        return 'Swim and '.parent::move(); //Gets the father's attribute
    }
}