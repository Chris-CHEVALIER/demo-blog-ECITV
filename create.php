<?php
require("./header.php");
require("./connect.php");

// Si le formulaire `POST` a été envoyé (soumis) par l'utilisateur
if ($_POST) {
    // Requête SQL pour ajouter un nouvel article en BDD
    $stmt = $db->prepare("INSERT INTO article (title, content, image_url) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $_POST['title'], $_POST['content'], $_POST['image_url']);
    $stmt->execute();

    // Redirige l'utilisateur vers la page d'accueil après l'insertion
    header("Location: index.php");
}
?>

<!-- Formulaire pour publier un nouvel article -->
<form method="POST">
    <!-- Champ pour saisir le titre de l'article -->
    <label for="title">Titre</label>
    <input type="text" name="title" id="title" class="form-control" placeholder="Le titre de l'article" />

    <!-- Champ pour saisir le contenu de l'article -->
    <label for="content">Contenu</label>
    <textarea name="content" id="content" class="form-control" placeholder="Le contenu de l'article"></textarea>

    <!-- Champ pour saisir l'URL de l'image de l'article -->
    <label for="image_url">URL de l'image</label>
    <input type="url" name="image_url" class="form-control" id="image_url" placeholder="L'image de l'article" />

    <!-- Bouton pour valider les saisies du formulaire -->
    <input type="submit" class="btn btn-success mt-3" value="Publier" />
</form>

<?php require("./footer.php") ?>