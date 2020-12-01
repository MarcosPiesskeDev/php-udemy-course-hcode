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

$einstein = new Dog();
echo $einstein->speak()."<br>";
echo '-------------------------- <br>';
$croco = new Crocodile();
echo $croco->move();
