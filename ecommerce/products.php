<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<main>
    <section class="products">
        <div class="container">
            <h2>Nos Produits</h2>
            <div class="products-grid">
                <?php
                $result = $conn->query("SELECT * FROM products");
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="product">';
                    echo '<img src="img/' . $row["image"] . '" alt="' . $row["name"] . '">';
                    echo '<h3>' . $row["name"] . '</h3>';
                    echo '<p>' . $row["price"] . '€</p>';
                    echo '<a href="product_detail.php?id=' . $row["id"] . '" class="btn">Voir détails</a>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>
