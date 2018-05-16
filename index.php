<!-- On déclare et remplit nos variables -->
<?php
  $nom = 'Doe';
  $prenom = 'John';
  $age = 24;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 7 Partie 1</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <!-- Ici encore, on peut remplacer le < ?php echo par < ?= -->
  <p>
    <?= 'Bonjour '.$prenom.' '.$nom.', tu as '.$age.' ans';?>
  </p>
</body>
</html>
