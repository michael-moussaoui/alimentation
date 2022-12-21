<?php
// session_start();

// $db = new PDO('mysql:host=localhost;dbname=alimentation', 'root', 'root');

// if (isset($_POST['submit'])) {
//     if (!empty($_POST['email']) && !empty($_POST['password'])) {

//         $email = ($_POST['email']);
//         $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

//         $getuser = $db->prepare('SELECT * FROM users WHERE email = ? AND password_hash = ? ');

//         $getuser->execute(array($email, $password_hash));

//         if ($getuser->rowCount() > 0) {
//             $_SESSION['email'] = $email;
//             $_SESSION['password'] = $password_hash;
//             $_SESSION['id'] = $getuser->fetch()['id'];

//             header("Location:index.php");
//             exit;
//             // echo $_SESSION['id'];
//         } else {
//             echo "Votre email ou mot de passe est incorrect...";
//         }
//     } else {
//         echo "Veuillez compléter tous les champs";
//     }
// }



// if ($_SERVER['REQUEST_METHOD'] === "POST") {

//     $mysqli = require __DIR__ . "/database.php";

//     $sql = sprintf(
//         "SELECT * FROM users WHERE email = '%s'",
//         $mysqli->real_escape_string($_POST["email"])
//     );

//     $result = $mysqli->query($sql);

//     $user = $result->fetch_assoc();

//     var_dump($user);
//     exit;
// }

// session_start();
// $mysqli = require __DIR__ . "/database.php";

// if (isset($_POST["email"]) && isset($_POST["password"])) {
//     $email = ($_POST["email"]);
//     $password = ($_POST["password"]);

//     if (empty($email)) {
//         header("Location:login.php?error= Veuillez renseigner votre adresse email");
//         exit();
//     } else if (empty($password)) {
//         header("Location:login.php?error= Veuillez saisir votre mot de passe");
//         exit();
//     } else {
//         $sql = "SELECT * FROM users WHERE email='$email' AND password_hash='$password'";
//         $result = mysqli_query($mysqli, $sql);

//         if (mysqli_num_rows($result)) {
//             $row = mysqli_fetch_assoc($result);
//             if ($row['email'] == $email && $row['password'] == $password) {
//                 $_SESSION['email'] = $row['email'];
//                 $_SESSION['id'] = $row['id'];
//                 header("Location:index.php");
//                 exit();
//             }
//         } else {
//             header("Location:login.php?error= Merci de remplir les deux champs");
//             exit();
//         }
//     }
// }
$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf(
        "SELECT * FROM users
                    WHERE email = '%s'",
        $mysqli->real_escape_string($_POST["email"])
    );

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if ($user) {

        if (password_verify($_POST["password"], $user["password_hash"])) {

            session_start();

            session_regenerate_id();

            $_SESSION["user_id"] = $user["id"];

            header("Location: index.php");
            exit;
        }
    }

    $is_invalid = true;
}





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
                <form action="" method="post">

                    <!-- <?php if (isset($_GET['error'])) {
                                echo $_GET['error'];
                            }
                            ?> -->
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Saisissez votre adresse email" aria-describedby="emailHelp">
                        <label for="email" class="form-label">Email</label>

                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Renseigner un mot de passe">
                        <label for="password">Password</label>
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" name="submit" class="btn btn-success">Se connecter</button>
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