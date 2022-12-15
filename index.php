<?php

// connect to database

// User connected

// On stocke les informations du user dans 

$user = [
    "id" => 1,
    "name" => "michael",
    "age" => 43,
    "genre" => "homme",
    "weight" => 65,
    "size" => 183,
    "IMC" => 19.4,
    "email" => "michael.moussaoui@gmail.com",
    "isLogged" => true
];

if (!$user["isLogged"]) {
    header("location:login.php");
    exit;
}
$page = [
    "title" => "alimentation"
];
include_once("includes/header.php");
?>
<div class="container">
    <header>
        <div class="title">Mon alimentation</div>
        <div class="profile"> <?php echo $user['name']; ?></div>
    </header>
    <section class="dataUser">
        <div>Graph</div>
        <div>IMC</div>
        <div><?php echo $user['weight']; ?> Kg</div>
    </section>
    <section class="date">
        <div> <?php echo date("l d M Y"); ?></div>

    </section>
    <section class="list">
        <div class="food">
            <div class="titleFood">Big Mac</div>
            <div class="kgFood">504 kcal</div>
        </div>
    </section>
    <footer>
        <button>+</button>
    </footer>
</div>
<?php
include_once("includes/footer.php");
?>