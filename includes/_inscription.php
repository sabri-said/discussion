<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/navbar.css">
    <title>Inscription</title>
</head>
<body>
<?php include '_header.php'; ?>
<main>
    <div class="signup-section vh-90 row-no-wrap bg-jet">
        <div class="signup-main-container row-no-wrap w-90 h-90 m-auto box-shadow-light">
            <div class="signup-left-container col bg-eerie-black">
                <h1 class="dark-goldenrod m-auto">Inscription</h1>
            </div>
            <div class="signup-right-container col bg-light">
                <form action="../inscription.php" method="POST"
                      class="col-no-wrap align-items-center justify-content-center">
                    <div class="form-group w-70">
                        <label for="login">Identifiant</label>
                        <input class="no-border" id="login" name="login" type="text">
                    </div>
                    <div class="form-group w-70">
                        <label for="password">Mot de Passe</label>
                        <input class="no-border" id="password" name="password" type="password" minlength="6" maxlength="10">
                    </div>
                    <div class="form-group w-70">
                        <label for="password-check">Confirmation Mot de Passe</label>
                        <input class="no-border" id="password-check" name="password-check" type="password" minlength="6" maxlength="10">
                    </div>
                    <div class="form-group w-70 align-items-center">
                        <button class="btn btn-md mb-05 bg-jet dark-goldenrod" type="submit" name="signup">S'inscrire</button>
                        <a class="delta-green" href="../connexion.php">Se connecter</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
</body>
</html>