<?php
session_start(); //haut pareil pour toutes les pages
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Recettes des boissons </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="entete">
  <nav class= "menu">
    <a href= "index.php"> Navigation</a>
    <a href= "recherche.php"> Recherche</a>
    <a href= "favoris.php"> Mes recettes préférées</a>
  </nav>
  <div class="zone-connexion">
    <?php if(isset($_SESSION['login'])): ?>
      <?= htmlspecialchars($_SESSION['login']) ?>
      <a href= "profil.php"> Mon Profil</a>
      <a href= "deconnexion.php"> Déconnexion</a>
    <?php else: ?>
      <form action= "connexion.php" method="post">
        <input type="text" name="login" placeholder="Login" required>
        <input type="password" name="mdp" placeholder="Mot de passe" required>
        <button type="submit"> Connexion</button>
    </form>
    <a href= "inscription.php"> Inscription</a>
  <?php endif; ?>
  </div>
</header>
<main>