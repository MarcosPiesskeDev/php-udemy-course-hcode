<?php

spl_autoload_register(function($className){
    $filename = "class".DIRECTORY_SEPARATOR.$className.".php";
    
    if(!empty($filename))
    {
        require_once($filename);
    }
});