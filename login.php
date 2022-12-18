<?php





$page = [
    "title" => "login"
];

include_once("includes/header.php");

?>

<header>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    Connexion
                </h1>
            </div>
        </div>
    </div>

</header>
<main>
    <div class="first">
        <div class="custom-shape-divider-bottom-1671192635">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <form>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Saisissez votre adresse email" aria-describedby="emailHelp">
                        <label for="email" class="form-label">Email</label>

                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" placeholder="Renseigner un mot de passe">
                        <label for="password">Password</label>
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-success">Se connecter</button>
                    </div>
                </form>
                <div class="text-center mb-2 mt-1">
                    <span>Vous n'avez pas encore de compte?</span>
                    <span class="spanForm"><a class="" href="register.php">Inscrivez-vous ici</a></span>
                </div>

</main>


<?php
include_once("includes/footer.php");
?>