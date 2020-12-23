<?php

define('SECRET_IV', pack('a16', 'pass'));
define('SECRET', pack('a16', 'pass'));

$data = [
   'name' => "i_love_code"
];

$openssl = openssl_encrypt(
    json_encode($data),
    'AES-128-CBC',
    SECRET,
    0,
    SECRET_IV
);

echo $openssl;

echo '<br>';

$myPass = openssl_decrypt($openssl, 'AES-128-CBC', SECRET, 0, SECRET_IV);

var_dump(json_decode($myPass));