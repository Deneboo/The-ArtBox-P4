<?php require 'header.php'; 

?>

<form action="traitement.php" method="POST">
    <div class="champ-formulaire">
        <label for="titre">Titre de l'œuvre</label>
        <input type="text" name="titre" id="titre" required>
    </div>
    <div class="champ-formulaire">
        <label for="artiste">Auteur de l'œuvre</label>
        <input type="text" name="artiste" id="artiste" required>
    </div>
    <div class="champ-formulaire">
        <label for="image">URL de l'image</label>
        <input type="url" name="image" id="image" pattern="https://.*\.(jpg|jpeg)$" maxlength="100" required>
    </div>
    <div class="champ-formulaire">
        <label for="description">Description</label>
        <textarea name="description" id="description" minlength="3" required></textarea>
    </div>

    <input type="submit" value="Valider" name="submit">
</form>

<?php require 'footer.php'; ?>
