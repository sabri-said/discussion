<header>
    <nav class="col-no-wrap">
        <div class="navbar z-10 vh-10 row-no-wrap">
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
                    <li>
                        <strong><?= $_SESSION['user']['login']; ?></strong>
                        <i class="fad fa-clipboard-user fa-fw"></i>
                        <ul>
                            <li class="flex-1"><a href="../profil.php">Profil</a></li>
                            <li class="flex-1"><a href="../logout.php">Deconnexion</a></li>
                        </ul>
                    </li>
                    <?php
                endif; ?>
            </ul>
        </div>
</header>