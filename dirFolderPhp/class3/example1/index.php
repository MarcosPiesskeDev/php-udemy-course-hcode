<?php

$file = fopen("test_txt.txt", "w+");

fclose($file);

unlink("test_txt.txt");

echo 'File deleted with success';