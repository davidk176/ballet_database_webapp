<?php

$username = 'elizas02_332user';
$password = 'Under1starr*';
$database = 'elizas02_csci332';

$mysqli = new mysqli('127.0.0.1', $username, $password, $database);

if ($mysqli->connect_errno) {
    echo "Error: Failed to make a MySQL connection, here is why: </br>";
    echo "Errno: " . $mysqli->connect_errno . "</br>";
    echo "Error: " . $mysqli->connect_error . "</br>";
    exit;
}
?>