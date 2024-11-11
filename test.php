<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Récupérer les données soumises
  $name = $_POST['name'];
  $email = $_POST['email'];

  // Afficher les données (tu peux les traiter selon tes besoins)
  echo "Nom : " . htmlspecialchars($name) . "<br>";
  echo "Email : " . htmlspecialchars($email);
}
?>
