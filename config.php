<?php


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'alimentation');

try {
    $mysqli = new mysqli(DB_NAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}

if ($mysqli === false) {
    die("Could not connect to database" . $mysqli->connect_error);
}
