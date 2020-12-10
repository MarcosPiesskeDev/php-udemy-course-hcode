<?php

$data = [
    'testing' => 'First cookie'
];

setcookie("FIRST_COOKIE", json_encode($data), time() + 3600);

echo "OK";