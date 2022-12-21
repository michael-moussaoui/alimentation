<?php

$host = "localhost";
$dbname = "alimentation";
$username = "root";
$password = "root";

// $mysqli = new mysqli(
//     $host,
//     $password,
//      $dbname
// );

$mysqli = mysqli_connect("localhost", "root", "root", "alimentation");

if ($mysqli->connect_errno) {
    die("Error connecting to database: " . $mysqli->connect_error);
}

return $mysqli;
