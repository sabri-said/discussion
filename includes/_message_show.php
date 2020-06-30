<?php
$i = 0;
while ($message = $userMsgFectchQry->fetch(PDO::FETCH_ASSOC)) : ?>
    <?php
    if ($_SESSION['user']['id'] == $message['id_utilisateur']) : ?>
        <div class="d-flex-col align-items-end">
            <h5 class="d-flex-row align-items-end vh-5 mr-05 dark-goldenrod"><?= $userFetchQry[$i]['login']; ?></h5>
            <p class="d-flex-row align-items-center vh-5 m-1 px-1 bg-gold-metallic eerie-black b-radius-1">
                <?= $message['message']; ?>
            </p>
        </div>
        <?php
    else : ?>
        <div class="d-flex-col align-items-start">
            <h5 class="d-flex-row align-items-end vh-5 ml-05 lemon-curry"><?= $userFetchQry[$i]['login']; ?></h5>
            <p class="d-flex-row align-items-center vh-5 m-1 px-1 bg-eerie-black dark-goldenrod b-radius-1">
                <?= $message['message']; ?>
            </p></div>
        <?php
    endif; ?>
    <?php
    ++$i;
endwhile; ?>