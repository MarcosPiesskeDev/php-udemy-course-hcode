<?php

//We could use 'error_reporting' method to control what we want to appear on screen
error_reporting(E_ALL & ~E_NOTICE);

$name = $_GET['name'];

echo "<br>";
echo $name;