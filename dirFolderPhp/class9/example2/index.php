<?php

if(!empty($_COOKIE['FIRST_COOKIE'])){
    $obj = json_decode($_COOKIE['FIRST_COOKIE']);
    echo $obj->testing;
}