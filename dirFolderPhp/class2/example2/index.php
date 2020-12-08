<?php

include_once("../../../PDO_DAO/configRequire.php");

use utils\ConnectionUtil\ConnectionUtil;

$sql = new ConnectionUtil();

$users = $sql->select("SELECT * FROM user ORDER BY username");

$headers = [];

foreach($users[0] as $key => $value){
    array_push($headers, ucfirst($key));
}

$file = fopen('users.csv', 'w+');

fwrite($file, implode(',', $headers));

foreach($users as $row){ //For lines
    $data = [];

    foreach($row as $key => $value){//For values
        array_push($data, $value);
    }

    fwrite($file, implode(",", $data)."\r\n");
}

fclose($file);