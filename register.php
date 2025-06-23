<?php
require_once 'includes/db.php';
session_start();
if (isset($_POST['username'], $_POST['password'])) {
    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->execute([$_POST['username'], password_hash($_POST['password'], PASSWORD_BCRYPT)]);
    echo "<script>alert('Inscription réussie');window.location='dashboard.php';</script>";
}
?>
<form method="POST">
    <h2>Inscription</h2>
    <input type="text" name="username" placeholder="Nom d'utilisateur" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <button type="submit">S'inscrire</button>
</form>
