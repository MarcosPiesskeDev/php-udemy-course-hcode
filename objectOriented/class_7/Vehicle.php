<?php

interface Vehicle{

    public function accelerate($speed);
    public function break($speed);
    public function gearshift($gear);
}