<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['user'];
    $password = $_POST['utilisateur'];
   header('Location: user.php');
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <h1>Bienvenue sur la page utilisateur créer by saloua protégée par un Cookie</h1>
    <p>Vous êtes connecté en tant que utilisateur créer par moi et dont le nom est user et le mdp est utilisateur</p>
    <a href="logout.php">Se déconnecter</a>
</body>
</html>
  
