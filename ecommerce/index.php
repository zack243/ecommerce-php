<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<main>
    <section class="hero">
        <div class="container">
            <h1>Bienvenue chez ZANDO</h1>
            <p>Découvrez nos produits les plus populaires et les nouveautés.</p>
            <a href="products.php" class="btn">Voir tous les produits</a>
        </div>
    </section>

    <section class="popular-products">
        <div class="container">
            <h2>Produits populaires</h2>
            <div class="products-grid">
                <?php
                // Requête SQL pour les produits populaires
                $sql_popular = "SELECT * FROM products ORDER BY popular DESC LIMIT 4";
                $result_popular = $conn->query($sql_popular);

                // Vérification des résultats et affichage des produits populaires
                if ($result_popular->num_rows > 0) {
                    while ($row = $result_popular->fetch_assoc()) {
                        echo '<div class="product">';
                        echo '<img src="img/' . htmlspecialchars($row["image"]) . '" alt="' . htmlspecialchars($row["name"]) . '">';
                        echo '<h3>' . htmlspecialchars($row["name"]) . '</h3>';
                        echo '<p>' . htmlspecialchars($row["price"]) . '€</p>';
                        echo '<a href="product_detail.php?id=' . htmlspecialchars($row["id"]) . '" class="btn">Voir détails</a>';
                        echo '<a href="add_to_cart.php?id=' . htmlspecialchars($row["id"]) . '" class="btn">Ajouter au panier</a>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>Aucun produit populaire trouvé.</p>';
                }
                ?>
            </div>
        </div>
    </section>

    <section class="new-products">
        <div class="container">
            <h2>Nouveaux produits</h2>
            <div class="products-grid">
                <?php
                // Requête SQL pour les nouveaux produits
                $sql_new = "SELECT * FROM products ORDER BY created_at DESC LIMIT 4";
                $result_new = $conn->query($sql_new);

                // Vérification des résultats et affichage des nouveaux produits
                if ($result_new->num_rows > 0) {
                    while ($row = $result_new->fetch_assoc()) {
                        echo '<div class="product">';
                        echo '<img src="img/' . htmlspecialchars($row["image"]) . '" alt="' . htmlspecialchars($row["name"]) . '">';
                        echo '<h3>' . htmlspecialchars($row["name"]) . '</h3>';
                        echo '<p>' . htmlspecialchars($row["price"]) . '€</p>';
                        echo '<a href="product_detail.php?id=' . htmlspecialchars($row["id"]) . '" class="btn">Voir détails</a>';
                        echo '<a href="add_to_cart.php?id=' . htmlspecialchars($row["id"]) . '" class="btn">Ajouter au panier</a>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>Aucun nouveau produit trouvé.</p>';
                }
                ?>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>
