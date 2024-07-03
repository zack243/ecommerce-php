<?php
session_start();

if (isset($_GET['id']) && isset($_GET['action'])) {
    $product_id = intval($_GET['id']);
    $action = $_GET['action'];

    if (isset($_SESSION['cart'][$product_id])) {
        if ($action === 'increase') {
            $_SESSION['cart'][$product_id]++;
        } elseif ($action === 'decrease' && $_SESSION['cart'][$product_id] > 1) {
            $_SESSION['cart'][$product_id]--;
        }
    }

    header('Location: cart.php');
}
?>
