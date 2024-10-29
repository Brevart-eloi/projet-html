<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Web Connexion</title>
    <link href="sitecss3.css" rel="stylesheet" />
</head>
<body>

<div class="login-container">
    <h2>Connexion</h2>
    
    <!-- Affiche le message d'erreur si présent -->
    <?php if (isset($_SESSION['error'])): ?>
        <p style="color: red;"><?php echo $_SESSION['error']; ?></p>
        <?php unset($_SESSION['error']); // Efface le message d'erreur après l'affichage ?>
    <?php endif; ?>
    
    <form action="process_login.php" method="POST">
        <!-- Champ de type email -->
        <input type="email" name="email" placeholder="Adresse email" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        
        <button type="submit">Se connecter</button>
    </form>

    <!-- Bouton d'inscription -->
    <a href="sitephp2.php">
        <button type="button" class="btn-inscription">S'inscrire</button>
    </a>
</div>

</body>
</html>
