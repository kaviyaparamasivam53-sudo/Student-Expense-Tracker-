<?php

$host = "db01.dbhost.dev";
$username = "user_4568n3tpw";
$password = "p4568n3tpw";
$database = "db_4568n3tpw";
$port = 5051;

$conn = new mysqli(
    $host,
    $username,
    $password,
    $database,
    $port
);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

?>