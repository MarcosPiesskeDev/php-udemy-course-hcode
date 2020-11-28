<?php

//function date() must have a parameter with format.
//d -> Day
//m -> Month
//Y -> Year
//H -> Hour
//i -> Minute
//s -> Seconds
echo date('d/m/Y H:i:s');
echo "<br>";

//This function you could convert string to timestamp:
$timeStamp = strtotime('2001-09-01');
//strtotime is an expression, then you can handle it like this to plus one week, day or year, etc...
$timeStampPlusDay = strtotime('+3 day');

echo date("d/m/Y",$timeStamp);
echo "<br>";
echo date("d/m/Y",$timeStampPlusDay);
echo "<br>";

//It'll get the server timezone naturally, then you should to pass it.
setlocale(LC_ALL, 'pt_BR', 'pt_BR_utf-8', 'portuguese');

//ucwords function you could use to upper case each first word from your sentence.
echo ucwords(strftime('%A %B'));
echo "<br>";
echo "<br>";

//Class DateTime:
$dateTime = new DateTime();

$period = new DateInterval("P15D");

$dateTime->add($period);

echo "Using datetime and add 15 days-> ".$dateTime->format('d/m/Y');