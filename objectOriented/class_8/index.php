<html>
    <a href='../'>Back</a>
    <br>
    <br>
    <br>
</html>

<?php

function __autoload($className)
{
    require_once $className.'.php';
}

$civic = new DelRey();

$civic->accelerate(200);