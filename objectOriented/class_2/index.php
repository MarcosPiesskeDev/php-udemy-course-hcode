<html>
    <a href='../'>Back</a>
    <br>
    <br>
    <br>
</html>
<?php

require_once 'Car.php';

$delorean = new Car();
$delorean->setModel('Delorean');
$delorean->setEngine('Eletric');
$delorean->setYear('1985');

print_r($delorean->getAllAtributes());