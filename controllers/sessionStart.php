<?php 

require ('users.php');

session_start();
foreach ($users as $user) {
   if ($_POST['pseudo'] === $user['name'] && $_POST['password'] === $user['password']) {        
        $_SESSION['name'] = $_POST['pseudo'];
        header('Location: /');
        exit;
   }
}

header('Location: ../connexion.php?error');
