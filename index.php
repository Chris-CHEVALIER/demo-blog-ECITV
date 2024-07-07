<?php

require("./header.php");
require("./connect.php");

echo '<div class="d-flex flex-wrap gap-5 justify-content-center">';

// Requête SQL pour récupérer tous les articles de le table
$result = $db->query("SELECT * FROM article");

// S'il y a plus de 0 article
if ($result->num_rows > 0) {
    // Parcours et affiche les titre et contenu chacun des articles enregistrés en BDD
    while ($article = $result->fetch_assoc()) { ?>
        <div class="card" style="width: 18rem;">
            <img src="<?= $article["image_url"] ?>" class="card-img-top" alt="<?= $article["title"] ?>">
            <div class="card-body">
                <h5 class="card-title"><?= $article["title"] ?></h5>
                <p class="card-text"><?= $article["content"] ?></p>
                <a href="#" class="btn btn-primary">Voir plus</a>
            </div>
        </div>
<?php }
} else {
    // Si aucun article n'existe, affiche ce message :
    echo "Aucun article trouvé...";
}

/* $article1 = [
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
 */
?>

</div>



<?php require("./footer.php") ?>