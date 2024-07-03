<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce"; // Remplacez par le nom de votre base de données

// Crée la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifie la connexion
if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
}
?>
