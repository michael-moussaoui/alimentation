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
<div class="containerApp">
    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <h1>Track calories</h1>
                </div>
                <div class="col-auto">
                    <div class="profile"><i class="bi bi-person"></i>
                        <span> <?php echo $user['name']; ?></span>
                    </div>
                </div>


            </div>
        </div>
    </header>
    <main>
        <section class="dataUser">
            <div class="imc col">IMC</div>
            <div class="doughnut col">
                <canvas id="myChart"></canvas>
                <div class="kcal">1520 kcal</div>
            </div>
            <div class="weight col"><?php echo $user['weight']; ?> Kg</div>
            <div class="custom-shape-divider-bottom-1671192635">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path>
                </svg>
            </div>

        </section>
        <section class="text-center py-3 ">
            <div class="date"> <?php
                                // "date_default_timezone_set" may be required by your server
                                date_default_timezone_set('Europe/Paris');

                                // instantiate a new DateTime object
                                $dateTimeObj = new DateTime('now', new DateTimeZone('Europe/Paris'));

                                // format the date according to your preferences
                                // the 3 params are [ DateTime object, ICU date scheme, string locale ]
                                $dateFormatted =
                                    IntlDateFormatter::formatObject(
                                        $dateTimeObj,
                                        'eeee d MMM y  ',
                                        'fr'
                                    );
                                echo ucwords($dateFormatted)


                                ?></div>


        </section>
        <section class="list">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="food">
                            <h3 class="titleFood">Big Mac</h3>
                            <p class="kgFood">504 kcal</p>
                        </div>
                        <div class="food">
                            <h3 class="titleFood">Big Mac</h3>
                            <p class="kgFood">504 kcal</p>
                        </div>
                        <div class="food">
                            <h3 class="titleFood">Big Mac</h3>
                            <p class="kgFood">504 kcal</p>
                        </div>

                    </div>
                </div>
            </div>

        </section>
    </main>
    <footer class="py-3">
        <div class="text-center">
            <button type="button" class="btn btn-success m-2">+</button>
        </div>
    </footer>
</div>
<?php
include_once("includes/footer.php");
?>