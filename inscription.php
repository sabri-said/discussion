<?php

session_start();

// todo display error messages at right place
// todo enforce security of input (check mysqli real_escape_string)
// todo add regex fields validation (check preg_match)

if (isset($_POST["signup"])) {
    // Form Signup variables
    $login = htmlentities(trim($_POST["login"]));
    $password = htmlentities(trim($_POST["password"]));
    $passwordCheck = htmlentities(trim($_POST["password-check"]));

    if ($login && $password && $passwordCheck) {
        if ($password == $passwordCheck) {
            if (strlen($password) < 6 || strlen($password) > 10) {
                echo "Le mot de passe doit contenir  entre 6 et 10 caractères";
            } elseif (!$password || !$passwordCheck) {
                echo "Tu as oublié de renseigner un mot de passe";
            } else {
                include 'includes/_database_connection.php';

                $userExistCheckQry = "select `login` from `discussion`.`utilisateurs` where `login`='$login'";
                $userExistCheckQryExec = $pdo->query($userExistCheckQry);

                if ($userExistCheckQryExec->rowCount() >= 1) {
                    echo "Cet identifiant est déjà utilisé.";
                } else {
                    // Encrypt password
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                    // Insert data in DB
                    $userInsQry = "insert into `discussion`.`utilisateurs` (login, password) VALUES ('$login', '$passwordHash')";
                    $userInsQryExec = $pdo->query($userInsQry);
                    session_destroy();
                    header('Location: connexion.php');
                }
            }
        } else {
            echo "Les mots de passe ne correspondent pas";
        }
    } else {
        echo "Tout les champs n'ont pas été renseignés";
    }
}

if (!isset($_SESSION['user'])) {
    include 'includes/_inscription.php';
} else {
    header('Location: index.php');
}
