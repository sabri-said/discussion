<?php

session_start();

// todo display error messages at right place
// todo add regex fields validation (check preg_match) or filter_var (e.g VALIDATE_EMAIL for email)

if (isset($_POST["signin"])) {
    // Form login variables
    $login = htmlentities(trim($_POST["login"]));
    $password = htmlentities(trim($_POST["password"]));

    if ($login && $password) {
        include 'includes/_database_connection.php';

        // Get hashed password in DB
        $userPwdHashCheck = "select `password` from `discussion`.`utilisateurs` where `login`='$login'";
        $userPwdHashFetch = $pdo->query($userPwdHashCheck)->fetch(PDO::FETCH_ASSOC);
        if ($userPwdHashFetch) {
            $userPwdHash = $userPwdHashFetch['password'];
            $userPwdValid = password_verify($password, $userPwdHash);

            if ($userPwdValid) {
                $userExistCheckQry = "select * from `discussion`.`utilisateurs` where `login`='$login' and `password`='$userPwdHash'";
                $userExistCheckQryExec = $pdo->query($userExistCheckQry);

                if ($userExistCheckQryExec->rowCount() == 0) {
                    echo "L'utilisateur et/ou le mot de passe est erronée";
                } elseif ($userExistCheckQryExec->rowCount() == 1) {
//            $userSetckie = setcookie('user', $login);
//            $_COOKIE['user'] = $login;

                    $userExistFetchQryExec = $userExistCheckQryExec->fetch(PDO::FETCH_ASSOC);
                    $_SESSION['user'] = $userExistFetchQryExec;
                }
            } else {
                echo "Le mot de passe ne correspond pas";
            }
        }
    } elseif (!$login || !$password) {
        echo "Tout les champs n'ont pas été renseignés";
    }
}

if (!isset($_SESSION['user'])) {
    include 'includes/_connexion.php';
} else {
    header('Location: index.php');
    exit();
}
