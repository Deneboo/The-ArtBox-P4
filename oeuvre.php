<?php
    require_once(__DIR__ . '/src/function.php');

    // Si l'URL ne contient pas d'id, on redirige sur la page d'accueil
    if(empty($_GET['id'])) {
        header('Location: index.php');
    }
    // retrieve the oeuvre with the id specified in the URL
    $oeuvreStatement = $pdo->prepare('SELECT * FROM oeuvres WHERE id = ?');
    $oeuvreStatement->execute([$_GET['id']]);
    $oeuvre = $oeuvreStatement->fetch();
    if(is_null($oeuvre)) {
        header('Location: index.php');
    }
    require 'header.php';
?>

<article id="detail-oeuvre">
    <div id="img-oeuvre">
        <img src="<?= htmlspecialchars($oeuvre['image']) ?>" alt="<?= htmlspecialchars($oeuvre['titre']) ?>">
    </div>
    <div id="contenu-oeuvre">
        <h1><?= htmlspecialchars($oeuvre['titre']) ?></h1>
        <p class="description"><?= htmlspecialchars($oeuvre['artiste']) ?></p>
        <p class="description-complete">
             <?= htmlspecialchars($oeuvre['description']) ?>
        </p>
    </div>
</article>

<?php require 'footer.php'; ?>
