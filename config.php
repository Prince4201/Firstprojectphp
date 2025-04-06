<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'user_db';

$conn = new mysqli($host, $user, $pass, $database);

if($conn->connect_error) {
    die("Connection Failed: " .$conn->connect_error);
}

?>