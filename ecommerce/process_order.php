<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect order details
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $postal_code = $_POST['postal_code'];
    $payment_method = $_POST['payment_method'];
    $total = 0;

    // Calculate total price
    foreach ($_SESSION['cart'] as $id => $quantity) {
        $result = $conn->query("SELECT price FROM products WHERE id = $id");
        $product = $result->fetch_assoc();
        $total += $product['price'] * $quantity;
    }

    // Insert order into database
    $conn->query("INSERT INTO orders (name, address, city, postal_code, payment_method, total) VALUES ('$name', '$address', '$city', '$postal_code', '$payment_method', '$total')");

    // Get the order ID
    $order_id = $conn->insert_id;

    // Insert order items into database
    foreach ($_SESSION['cart'] as $id => $quantity) {
        $conn->query("INSERT INTO order_items (order_id, product_id, quantity) VALUES ($order_id, $id, $quantity)");
    }

    // Clear the cart
    unset($_SESSION['cart']);

    // Redirect to a thank you page
    header('Location: thank_you.php');
    exit();
}
?>

