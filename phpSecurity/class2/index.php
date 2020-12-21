<?php
//SQL injection

$id = (isset($_GET["id"]) ? $_GET["id"] : 1);

if (!is_numeric($id) || strlen($id) > 5){
    exit ("we got you");
}

$conn = mysqli_connect("127.0.0.1", "root", "Info@1234", "db_php_7");

$sql = "SELECT * FROM user WHERE id = $id";

$exec = mysqli_query($conn, $sql);

while($result = mysqli_fetch_object($exec)){
    print_r($result);
}