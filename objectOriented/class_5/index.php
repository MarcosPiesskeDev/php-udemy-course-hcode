<html>
    <a href='../'>Back</a>
    <br>
    <br>
    <br>
</html>

<?php

require_once 'Person.php';

$object = new Person();

//We could access this attribute, because it's public:
echo $object->name."<br>"; 

//Trying to access this attribute will failed because its protected, just class that extends this could see this attribute:
//echo $object->age;

//Trying to access this attribute will failed because its private, just the class who defined them could see this attribute:
//echo $object->password;

//Then, we must to use an puplic method that can instance this attributes, and it will work:
echo $object->showData();