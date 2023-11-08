<?php
session_start();
if (isset($_SESSION['isUserAuthenticated'])){
    // L'utilisateur est authentifié
} else {
    // Rediriger vers la page de login
    header("Location: loginPage.php");
    exit;
}
?>