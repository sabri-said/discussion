<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=discussion', 'root', "");
} catch (Exception $exception) {
    exit("Erreur: {$exception->getMessage()}");
}
