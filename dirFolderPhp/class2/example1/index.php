<?php

$file = fopen("log.txt", "w+");

fwrite($file, date('Y-m-d H:i:s'));

fclose($file);

echo 'File created with success!';