<?php

error_reporting(1);
ini_set('display_errors', '1');


$host = "localhost";
$user = "root";
$password = "1234";
$dbname = "test";
$conn = new mysqli($host, $user, $password, $dbname);

$connect = mysqli_connect("localhost", "root", "1234", "test");

?>
