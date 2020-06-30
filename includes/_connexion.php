<!doctype html>
<html lang="fr">
<head>
    <?php
    include '_head.php' ?>
    <title>Connexion</title>
</head>
<body>
<?php
include '_header.php'; ?>
<main>
    <div class="signin-section vh-90 row-no-wrap bg-jet">
        <div class="signin-main-container row-no-wrap w-90 h-90 m-auto box-shadow-light">
            <div class="signin-left-container col bg-light">
                <form action="../connexion.php" method="POST"
                      class="col-no-wrap align-items-center justify-content-center">
                    <div class="form-group w-70">
                        <label for="login">Identifiant</label>
                        <input class="no-border" id="login" name="login" type="text">
                    </div>
                    <div class="form-group w-70">
                        <label for="password">Mot de Passe</label>
                        <input class="no-border" id="password" name="password" type="password">
                    </div>
                    <div class="form-group w-70 align-items-center">
                        <button class="btn btn-md mb-05 bg-jet dark-goldenrod" type="submit" name="signin">Se connecter</button>
                        <a class="delta-green" href="../inscription.php">S'inscrire</a>
                    </div>
                </form>
            </div>
            <div class="signin-right-container col bg-eerie-black ">
                <h1 class="dark-goldenrod m-auto">Connexion</h1>
            </div>
        </div>
    </div>
</main>
</body>
</html>