<?php
session_start();

// Suppression des informations de l'utilisateur dans la session
session_unset();
session_destroy();

// Redirection vers la page d'accueil
header('Location: index.php');
exit;
?>