<?php
session_start();

// Définis les identifiants valides pour l'exemple (à remplacer par une connexion à une base de données si nécessaire)
$valid_email = 'exemple@domaine.com';
$valid_password = 'password123';

// Récupère les données du formulaire
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Vérifie si les identifiants sont corrects
if ($email === $valid_email && $password === $valid_password) {
    // Connexion réussie
    $_SESSION['logged_in'] = true;
    $_SESSION['email'] = $email;

    // Redirige vers la page d'accueil
    header("Location: accueil.php");
    exit();
} else {
    // Connexion échouée, message d'erreur
    $_SESSION['error'] = "Adresse email ou mot de passe incorrect.";
    header("Location: connexion.php");
    exit();
}
?>
