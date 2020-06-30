<!doctype html>
<html lang="fr">
<head>
    <?php
    include '_head.php' ?>
    <title>Discussion</title>
</head>
<body>
<?php
include '_header.php' ?>
<main>
    <div class="col vh-90 m-auto">
        <div class="col-no-wrap bg-jet min-h-80 max-h-80 overflow-y-scroll" id="chatWindow">
            <?php
            include 'includes/_message_show.php' ?>
        </div>
        <form action="../discussion.php" class="row h-20" method="post">
            <div class="row-no-wrap">
                <!--                    <label for="chatField"></label>-->
                <textarea id="chatField" maxlength="140" name="chatField" placeholder="Tapez votre message"></textarea>
                <button class="btn btn-sm align-self-center mr-1 bg-jet dark-goldenrod" name="submit" type="submit" data-hover="Envoyer">
                    <span><i class="fad fa-paper-plane fa-fw fa-lg"></i></span></button>
            </div>
        </form>
    </div>
</main>
<script src="../js/bottomScrollbar.js"></script>
</body>
</html>
