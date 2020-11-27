<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Arrays</title>
    </head>
    <body>
        <a href='../'>Back</a>
        <br>
        <br>
    </body>
</html>

<?php

print_r(commonArray());
echo twoDimensional();
print_r(insertingArray());
print_r(jsonDemo());

//Common Array
function commonArray()
{
    echo "<br>";
    return ["Someone1", "Someone2", "Someone3"];
}

//=======================================
// two-dimensional array
function twoDimensional()
{
    $cars[0][0] = "GM";
    $cars[0][1] = "Cobalt";
    $cars[0][2] = "Onix";
    $cars[0][3] = "Camaro";

    $cars[1][0] = "Ford";
    $cars[1][1] = "Fiesta";
    $cars[1][2] = "Fusion";
    $cars[1][3] = "Eco Sport";
    echo "<br>";

    return end($cars[1]);
}

//=======================================
// Inserting data inside the array:

function insertingArray()
{
    $person = [];

    array_push($person, [
        'name' => "Emmet",
        'age' => 82
    ]);

    array_push($person, [
        'name' => "Marty",
        'agr' => 59
    ]);

    echo "<br>";
    return $person;
}

//=======================================
//json:

function jsonDemo()
{
    $json = '[{"name":"Marcos", "age":21}, {"name":"Someone", "age":20}]';
    return json_decode($json, true);
}

//=======================================
//Constants in php:
function constEnviroment()
{
    define("DATABASE", [
        '127.0.0.1',
        'root',
        'password',
        'test'
    ]);
    echo "<br>";
    return DATABASE;
}
