<header>
    <nav class="col-no-wrap">
        <div class="navbar z-10 row-no-wrap">
            <ul class="row-no-wrap align-items-center ml-1">
                <?php
                if (!isset($_SESSION['user'])) : ?>
                    <li><a href="../index.php">Accueil</a></li>
                    <li><a href="../connexion.php">Connexion</a></li>
                    <li><a href="../inscription.php">Inscription</a></li>
                    <?php
                else : ?>
                    <li><a href="../index.php">Accueil</a></li>
                    <li><a href="../discussion.php">Chat</a></li>
                    <li><a href="../profil.php">Profil</a></li>
                    <li><a href="../logout.php">Deconnexion</a></li>
                    <ul class="row-no-wrap align-items-center justify-content-end mr-1">
                        <li><h2><?= $_SESSION['user']['login']; ?></h2></li>
                    </ul>
                    <?php
                endif; ?>
            </ul>

        </div>
</header>