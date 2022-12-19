<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=alimentation', 'root', 'root');
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}

$response = $bdd->query('SELECT * FROM USERS');

while ($data = $response->fetch()) {
    echo  'nom: ' . $data['name'] . ' adresse email:  '  . $data['email'] . '<br />';
}
