<?php

session_start();

// Check user access
if (!isset($_SESSION['user'])) {
    header('Location: connexion.php');
    exit();
} else {
    // Session variables from $_SESSION['user'] array
    $ssId = $_SESSION['user']['id'];
    $ssLogin = $_SESSION['user']['login'];
    include 'includes/_profil.php';
}

if (isset($_POST["submit"])) {
    // Form Submit variables from $_POST request
    $login = htmlentities(trim($_POST["login"]));
    $password = htmlentities(trim($_POST["password"]));
    $passwordCheck = htmlentities(trim($_POST["password-check"]));

    include 'includes/_database_connection.php';
    $userExistCheckQry = "select * from `discussion`.`utilisateurs` where `id`='$ssId'";
    $userExistCheckQryExec = $pdo->query($userExistCheckQry);

    if ($login) {
        $userLoginUpdQry = "update `discussion`.`utilisateurs` set `login`='$login' where `id`='$ssId'";
        $userLoginUpdQryExec = $pdo->query($userLoginUpdQry);
    } elseif (empty($login)) {
        echo "l'identifiant n'a pas été changé";
    }
    if ($password && $passwordCheck) {
        if ($password == $passwordCheck) {
            if (strlen($password) < 6 || strlen($password) > 10) {
                echo "Le mot de passe doit contenir  entre 6 et 10 caractères";
            } else {
                // Encrypt password
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                $userPwdUpdQry = "update `discussion`.`utilisateurs` set `password`='$passwordHash' where `id`='$ssId'";
                $userPwdUpdQryExec = $pdo->query($userPwdUpdQry);
            }
        } else {
            echo "Les mots de passe ne correspondent pas";
        }
    } elseif (!$password || !$passwordCheck) {
        echo "Tu as oublié de renseigner un mot de passe";
    }

    $userExistUpdQry = "select * from `discussion`.`utilisateurs` where `id`='$ssId'";
    $userExistUpdQryExec = $pdo->query($userExistUpdQry);
    $userExistFetchUpdQryExec = $userExistUpdQryExec->fetch(PDO::FETCH_ASSOC);
    $_SESSION['user'] = $userExistFetchUpdQryExec;

    header('Location: profil.php');
//    echo '<script type="text/javascript"> window.location = "profil.php"; </script> ';
}
