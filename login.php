<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérifiez si le login et le mot de passe correspondent à "admin".
    if ($username === 'admin' && $password === 'admin') {
        // Redirigez l'utilisateur vers "edition_page.php".
        header('Location: edition_page.php');
        exit;
    } else {
        // Si les identifiants ne correspondent pas, affichez un message d'erreur ou effectuez une autre action.
        echo "Login incorrect. Veuillez réessayer.";
    }
}
?>