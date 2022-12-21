<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=alimentation', 'root', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
