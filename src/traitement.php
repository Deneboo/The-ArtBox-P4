<?php
require_once(__DIR__ . '/connexion.php');

if(empty($_POST['titre']) || empty($_POST['artiste']) || empty($_POST['image']) || strlen($_POST['description']) < 3) {
    header('Location: ajouter.php?error=true');
} else {
  $insertStatement = $pdo->prepare('INSERT INTO oeuvres (titre, artiste, image, description) VALUES (:titre, :artiste, :image, :description)');
  // filter_var($string, FILTER_SANITIZE_STRING)
  $insertStatement->execute([
      'titre' => $_POST['titre'],
      'artiste' => $_POST['artiste'],
      'image' => $_POST['image'],
      'description' => $_POST['description']
  ]);
  header('Location: /oeuvre.php?id=' . $pdo->lastInsertId());
  exit();
}