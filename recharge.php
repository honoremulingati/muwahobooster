<?php
require_once 'includes/auth.php';
require_login();
?>
<h3>Recharge via Airtel ou M-Pesa</h3>
<p>Envoyez à l’un de ces numéros:</p>
<ul>
  <li>Airtel: +243900000000</li>
  <li>M-Pesa: +243820000000</li>
</ul>
<form method="POST" enctype="multipart/form-data">
    <input type="text" name="transaction_id" placeholder="ID Transaction" required><br>
    <input type="file" name="preuve" required><br>
    <button type="submit">Envoyer preuve</button>
</form>
