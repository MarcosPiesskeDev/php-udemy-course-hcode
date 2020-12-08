<html>
    <a href="../">Back</a>
    <br>
    <br>
    <br>
</html>

<?php

function __autoload($className)
{
    require_once $className.'.php';
}

$civic = new Car();

$civic->gearshift(1);