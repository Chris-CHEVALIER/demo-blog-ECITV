<?php

require("./header.php");

$article1 = [
    "title" => "Mon premier article",
    "content" => "Trop mignon !!! 😍",
    "image_url" => "https://meilleurseleveurs.com/wp-content/uploads/2023/11/Adoption-golden-retriever-2.jpg"
];

$article2 = [
    "title" => "Mon deuxième article",
    "content" => "Je craque ! 🥰",
    "image_url" => "https://www.zooplus.fr/magazine/wp-content/uploads/2022/01/cocker-spaniel-1-768x509.jpeg"
];

$articles = [$article1, $article2];

?>

<!-- Bloc contenant tous les articles à afficher -->
<div class="d-flex flex-wrap gap-5 justify-content-center">
    <!-- Boucle sur le tableau d'articles et les affiche individuellement -->
    <?php foreach ($articles as $article) : ?>
        <div class="card" style="width: 18rem;">
            <img src="<?= $article["image_url"] ?>" class="card-img-top" alt="<?= $article["title"] ?>">
            <div class="card-body">
                <h5 class="card-title"><?= $article["title"] ?></h5>
                <p class="card-text"><?= $article["content"] ?></p>
                <a href="#" class="btn btn-primary">Voir plus</a>
            </div>
        </div>
    <?php endforeach ?>
</div>



<?php require("./footer.php") ?>