<?php

// todo delete user messages for connected user

session_start();

if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit();
}

// Session variables from $_SESSION['user'] array
$ssId = $_SESSION['user']['id'];
$ssLogin = $_SESSION['user']['login'];

include 'includes/_database_connection.php';

$userFetchQry = $pdo->query("select `login` from `utilisateurs` `u` inner join `messages` `m` on `u`.`id`=`m`.`id_utilisateur`")->fetchAll(PDO::FETCH_ASSOC);
$userMsgFectchQry = $pdo->query("select * from `messages`");

if (isset($_POST['submit'])) {
    $userMessage = $_POST['chatField'];
    if (!empty($userMessage)) {
        $userMsgInsertQry = "insert into `discussion`.`messages` (`message`, `id_utilisateur`, `date`) values ('$userMessage', '$ssId', CURDATE())";
        $userMsgInsertQryExec = $pdo->query($userMsgInsertQry);
        header('Location: discussion.php');
    }
}

include 'includes/_discussion.php';
