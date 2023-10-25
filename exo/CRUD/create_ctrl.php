<?php
require('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pseudo = $_POST['pseudo'];
    $mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_BCRYPT);
    $description = $_POST['description'];

    $stmt = $conn->prepare("INSERT INTO user (pseudo, mot_de_passe, description) VALUES (?, ?, ?)");
    $stmt->execute([$pseudo, $mot_de_passe, $description]);

    header('Location: index.php');
}
?>
