<?php
// include("bd.php");
error_reporting(E_ALL);
ini_set("display_errors", 1);

if (empty($_POST["name"])) {
    die("Merci de renseigner le prenom");
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Merci de renseigner un email valide");
}

if (strlen($_POST["password"]) < 8) {
    die("Le mot de passe doit contenir au moins 8 caractères");
}

if (!preg_match("/[a-z]/i", $_POST["password"])) {
    die("Le mot de passe doit contenir au moins une lettre");
}
if (!preg_match("/[0-9]/", $_POST["password"])) {
    die("Le mot de passe doit contenir au moins un chiffre");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO users (name,age,genre,weight,size,email,password_hash)
 VALUES(?,?,?,?,?,?,?)";

$stmt = $mysqli->stmt_init();

if (!$stmt->prepare($sql)) {
    die("SQL error:" . $mysqli->error);
}

$stmt->bind_param(
    "sssssss",
    $_POST["name"],
    $_POST["age"],
    $_POST["genre"],
    $_POST["weight"],
    $_POST["size"],
    $_POST["email"],
    $password_hash
);

if ($stmt->execute()) {
    header("Location:index.php");
    exit;

    // echo "Votre inscription est validée";
} else {
    if ($mysqli->errno === 1062) {
        die("Cet email est déjà enregistré");
    } else {
        die($mysqli->error . "" . $mysqli->errno);
    }
}

// print_r($_POST);
// var_dump($password_hash);
