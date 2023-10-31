<?php

require_once 'dbConfig.php'; 

$information = $db->query("SELECT * FROM information where id='1'");

$row = mysqli_fetch_assoc($information);
$description = $row['description'];

$bed = $row['bed'];
$place = $row['place'];
$bedroom = $row['bedroom'];

$week = $row['week'];
$night = $row['night'];
$week_high = $row['week_high'];
$night_high = $row['night_high'];

$address = $row['address'];
$postcode = $row['postcode'];
$city = $row['city'];

$phone = $row['phone'];
$mail = $row['mail'];
$facebook = $row['facebook'];
$x = $row['x'];
$instagram = $row['instagram'];

?>