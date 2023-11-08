<?php
session_start();
unset($_SESSION['isUserAuthenticated']);
header("Location: index.php");
exit;
?>