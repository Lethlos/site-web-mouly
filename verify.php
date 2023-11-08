<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['isUserAuthenticated']) && $_POST['isUserAuthenticated'] === 'true') {
    // L'utilisateur est authentifié
} else {
    // Rediriger vers la page de login
    header("Location: loginPage.php");
    exit;
}
?>