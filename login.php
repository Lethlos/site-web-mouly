<?php

require_once 'dbConfig.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; 

    $result = $db->query("SELECT username, password FROM login");

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            if ($row != null) {
                $username_db = $row['username'];
                $pwHash = $row['password'];
                if ($username === $username_db) {
                    if (password_verify($password, $pwHash)) {
                        header('Location: edition_page.php');
                        exit;
                    }
                    else {

                    }
                }
            }
        }
    }

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