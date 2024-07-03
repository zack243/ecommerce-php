<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $payment_method = $_POST['payment_method'];

    // Code pour traiter le paiement en utilisant le mode de paiement sélectionné
    // Si paiement par carte de crédit, intégrer une API de paiement
    // Si paiement par M-Pesa, intégrer l'API de M-Pesa

    // Exemple de traitement de commande (à personnaliser selon vos besoins)
    // ...

    // Après le traitement, vider le panier
    unset($_SESSION['cart']);

    header('Location: thank_you.php');
    exit;
}
?>
