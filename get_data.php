<?php

require_once 'dbConfig.php'; 

$information = $db->query("SELECT * FROM information where id='1'");

$row = mysqli_fetch_assoc($information);
$description = $row['description'];
?>