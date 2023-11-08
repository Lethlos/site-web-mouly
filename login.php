<?php
session_start();
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
                        $_SESSION['isUserAuthenticated'] = 'true';
                        echo $_SESSION['isUserAuthenticated'];
                        header('Location: edition_page.php');
                        exit;
                    }
                    else {

                    }
                } else {

                }
            }
        }
    }
}
?>