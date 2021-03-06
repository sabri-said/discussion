<?php
session_start(); ?>

<!doctype html>
<html lang="fr">
<head>
    <?php
    include 'includes/_head.php' ?>
    <title>Accueil</title>
</head>
<body>
<?php
if (isset($_SESSION['user'])) :
    include 'includes/_header.php'; ?>
    <?php
endif; ?>
<main>
    <?php
    if (!isset($_SESSION['user']['login'])) : ?>
    <div class="bg-light vh-100">
        <?php
    else : ?>
        <div class="bg-light vh-90">
            <?php
    endif; ?>
            <?php
            if (!isset($_SESSION['user']['login'])) : ?>
                <div class="col-no-wrap m-auto text-center justify-content-center">
                    <h1 class="m-1 jet">Hello, Apparamment tu n'es pas encore connecté(e) ou tu n'as pas encore créé(e) ton
                        compte</h1>
                    <p class="m-1 jet">C'est par ici que ça se passe</p>
                    <div class="d-flex-row justify-content-center">
                        <a href="connexion.php">
                            <button class="btn btn-md m-1 bg-jet dark-goldenrod" type="submit" name="signin">Se Connecter</button>
                        </a>
                        <a href="inscription.php">
                            <button class="btn btn-md m-1 bg-jet dark-goldenrod" type="submit" name="signup">S'inscrire</button>
                        </a>
                    </div>
                </div>
                <?php
            else : ?>
                <div class="col-no-wrap m-auto text-center justify-content-center">
                    <h1 class="m-1 jet">Hello, <?= $_SESSION['user']['login']; ?> </h1>
                    <p class="jet">Apparament tu es bien connecté(e), tu peux maintenant te rendre sur le <a
                                href="discussion.php"><strong><em>chat</em></strong></a></p>
                </div>
                <?php
            endif; ?>
        </div>
</main>
</body>
</html>
