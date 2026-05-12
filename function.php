<?php
    require_once(__DIR__ . '/connexion.php');
    // Request oeuvres from the database
    $oeuvresStatement = $pdo->prepare('SELECT * FROM oeuvres');
    // Execute the request
    $oeuvresStatement->execute();
    $oeuvres = $oeuvresStatement->fetchAll();