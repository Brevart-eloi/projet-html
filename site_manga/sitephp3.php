<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
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
    
    <form method="POST">
        <!-- Champ de type nom utilisateur -->
        <input type="text" name="username" placeholder="Nom utilisateur..." required>
        <input type="password" name="password" placeholder="Mot de passe..." required>
        
        <button type="submit">Se connecter</button>
    </form>

    <?php
    // Vérifiez si le formulaire a été soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Remplacez ces informations par vos propres informations d'identification
        $valid_username = "utilisateur"; // Nom d'utilisateur valide
        $valid_password = "motdepasse"; // Mot de passe valide

        // Récupérez les informations d'identification
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Vérifiez les informations d'identification
        if ($username === $valid_username && $password === $valid_password) {
            // Authentification réussie
            $_SESSION['username'] = $username; // Enregistrez le nom d'utilisateur dans la session

            // Redirigez vers sitephp2.php
            header("Location: sitephp2.php");
            exit(); // Terminez le script après la redirection
        } else {
            // Authentification échouée
            $_SESSION['error'] = "Nom d'utilisateur ou mot de passe incorrect.";
            header("Location: sitephp2.php"); // Redirigez vers la page de connexion
            exit();
        }
    }
    ?>
</div>

</body>
</html>
