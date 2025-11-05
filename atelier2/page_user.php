<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['user'];
    $password = $_POST['utilisateur'];
   header('Location: user.php');
}
?>

  
