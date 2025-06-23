<?php
require_once 'includes/db.php';
require_once 'includes/auth.php';
require_once 'includes/api_exobooster.php';
require_login();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $link = $_POST['link'];
    $service = $_POST['service'];
    $quantity = $_POST['quantity'];

    $response = call_exobooster_api('order', [
        'service' => $service,
        'link' => $link,
        'quantity' => $quantity
    ]);

    if (isset($response['order'])) {
        echo "<script>alert('Commande passée avec succès: ID " . $response['order'] . "');</script>";
    } else {
        echo "<script>alert('Erreur: " . ($response['error'] ?? 'inconnue') . "');</script>";
    }
}
?>
<form method="POST">
    <input type="text" name="link" placeholder="Lien du post" required>
    <input type="text" name="service" placeholder="ID du service" required>
    <input type="number" name="quantity" placeholder="Quantité" required>
    <button type="submit">Commander</button>
</form>
