<html>
    <a href='../'>Back</a>
    <br>
    <br>
    <br>
</html>
<?php

$errorExists = true;

var_dump($errorExists);


$num1 = 20;
$num2 = '20';

var_dump($num1 == $num2);

var_dump($num1 === $num2);

echo "<br>";

$arr = [2, 3, 2];

var_dump($arr[1] <=> $arr[2]);

echo "<br>";

var_dump($arr[0] <=> $arr[2]);

echo "<br>";

var_dump($arr[0] <=> $arr[1]);