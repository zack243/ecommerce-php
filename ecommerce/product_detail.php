<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<?php
$product_id = $_GET['id'];
$result = $conn->query("SELECT * FROM products WHERE id = $product_id");
$product = $result->fetch_assoc();
?>

<main>
    <section class="product-detail">
        <div class="container">
            <div class="product-detail-box">
                <img src="img/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                <div class="product-info">
                    <h2><?php echo $product['name']; ?></h2>
                    <p><?php echo $product['description']; ?></p>
                    <p>Prix: <?php echo $product['price']; ?>€</p>
                    <a href="add_to_cart.php?id=<?php echo $product['id']; ?>" class="btn">Ajouter au panier</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>
