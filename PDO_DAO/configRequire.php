<?php

function autoLoader($class) {

    $classPath = str_replace('\\', '/', $class);   
    $path = explode("/", $classPath); //Exploding patth in array to get right path
    $pathCut = $path[0]."/".$path[1]; //Get path without duplicated path

    if (!empty($pathCut)){
        require __DIR__. '/src/' . $pathCut . '.php';
    } 
}

spl_autoload_register('autoLoader');
