<?php
session_start();
if ($_POST['username'] == 'admin' && $_POST['password'] == 'adminpass') {
    $_SESSION['admin_id'] = 1;
    header('Location: dashboard.php');
    exit;
}
?>
<form method="POST">
    <h2>Admin Login</h2>
    <input type="text" name="username" placeholder="Nom admin">
    <input type="password" name="password" placeholder="Mot de passe">
    <button type="submit">Connexion</button>
</form>
