<?php

$filename = 'users.csv';

if (file_exists($filename)) {
    $readFile = fopen($filename, 'r');

    $headers = explode(',', fgets($readFile));

    $data = [];

    while ($row = fgets($readFile)) {
        $rowData = explode(',', $row);
        $line = [];
        for ($i = 0; $i < count($headers); $i++){

            $line[$headers[$i]] = $rowData[$i];
        }

        array_push($data, $line);
    }

    fclose($readFile);

    echo json_encode($data);
}