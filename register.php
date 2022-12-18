<?php





$page = [
    "title" => "register"
];

include_once("includes/header.php");

?>
<header>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    Inscription
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
                        <input type="text" class="form-control" id="name" placeholder="Saisissez votre prénom" aria-describedby="nameHelp">
                        <label for="name" class="form-label">Prenom</label>

                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="age" placeholder="Saisissez votre age" aria-describedby="ageHelp">
                        <label for="age" class="form-label">Age</label>

                    </div>
                    <select class="form-select mb-3" aria-label="Default select example">
                        <option selected>Selectionner votre genre</option>
                        <option value="1">Homme</option>
                        <option value="2">Femme</option>


                    </select>
                    <div class="mb-3">
                        <label for="size" class="form-label mt-2">Taille</label>
                        <input type="range" class="form-range" id="size" min=120 max=230 step="1" oninput="sliderChangeSize
                        (this.value)">
                        <output id="output">170</output>
                    </div>
                    <div class="mb-3">
                        <label for="weight" class="form-label mt-2">Poids</label>
                        <input type="range" class="form-range" id="weight" min=20 max=200 step="1" oninput="sliderChangeWeight
                        (this.value)">
                        <output id="outputBis">70</output>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Saisissez votre adresse email" aria-describedby="emailHelp">
                        <label for="email" class="form-label">Email</label>

                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" placeholder="Renseigner un mot de passe">
                        <label for="password">Password</label>
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-success">S'inscrire</button>
                    </div>
                </form>
                <div class="text-center mb-2 mt-1">
                    <span>Déja un compte?</span>
                    <span class="spanForm"><a class="" href="login.php">Connectez-vous ici</a></span>
                </div>
            </div>
        </div>
    </div>
</main>



<?php
include_once("includes/footer.php");
?>