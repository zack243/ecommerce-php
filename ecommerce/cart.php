<?php
session_start();
include 'header.php';
include 'db.php';

$cart_items = [];
$cart_total = 0;

if (isset($_SESSION['cart'])) {
    $product_ids = array_keys($_SESSION['cart']);
    if (!empty($product_ids)) {
        $ids = implode(',', array_map('intval', $product_ids));
        $result = $conn->query("SELECT * FROM products WHERE id IN ($ids)");
        while ($row = $result->fetch_assoc()) {
            $row['quantity'] = $_SESSION['cart'][$row['id']];
            $cart_items[] = $row;
            $cart_total += $row['price'] * $row['quantity'];
        }
    }
}
?>

<main class="center-content">
    <section class="cart">
        <div class="container">
            <h2>Votre Panier</h2>
            <div class="cart-items">
                <?php
                if (!empty($cart_items)) {
                    foreach ($cart_items as $item) {
                        echo '<div class="cart-item">';
                        echo '<img src="img/' . htmlspecialchars($item["image"]) . '" alt="' . htmlspecialchars($item["name"]) . '">';
                        echo '<div class="item-details">';
                        echo '<h3>' . htmlspecialchars($item["name"]) . '</h3>';
                        echo '<p>' . htmlspecialchars($item["price"]) . '€</p>';
                        echo '<p>Quantité: ' . htmlspecialchars($item["quantity"]) . '</p>';
                        echo '<div class="quantity-controls">';
                        echo '<a href="update_cart.php?id=' . htmlspecialchars($item["id"]) . '&action=decrease" class="btn">-</a>';
                        echo '<a href="update_cart.php?id=' . htmlspecialchars($item["id"]) . '&action=increase" class="btn">+</a>';
                        echo '<a href="remove_from_cart.php?id=' . htmlspecialchars($item["id"]) . '" class="btn remove-btn">x</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>Votre panier est vide.</p>';
                }
                ?>
            </div>
            <div class="cart-total">
                <h3>Total: <?php echo $cart_total; ?>€</h3>
            </div>
            <div class="cart-actions">
                <a href="checkout.php" class="btn">Procéder au paiement</a>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>
