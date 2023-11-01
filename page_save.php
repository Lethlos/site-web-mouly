<?php

require_once 'dbConfig.php'; 

$statusMsg = ''; 
$status = 'error'; 

$id = 1;

$description = $_POST['user_message'];

$bed = $_POST['inputBed'];
$place = $_POST['inputPlace'];
$bedroom = $_POST['inputRoom'];

$week = $_POST['inputPriceWeek'];
$night = $_POST['inputPriceNight'];
$week_high = $_POST['inputPriceHighWeek'];
$night_high = $_POST['inputPriceHighNight'];

$address = $_POST['inputAdress'];
$postcode = $_POST['inputCP'];
$city = $_POST['inputCity'];

$phone = $_POST['inputNumTel'];
$mail = $_POST['inputMail'];
$facebook = $_POST['inputFacebook'];
$x = $_POST['inputX'];
$instagram = $_POST['inputInsta'];


$delete = $db->query("DELETE from information");
$insert = $db->query("INSERT into information (id, description, bed, place, bedroom, week, night, week_high, night_high, address, postcode, city, phone, mail, facebook, x, instagram) VALUES ('$id', '$description', '$bed', '$place', '$bedroom', '$week', '$night', '$week_high', '$night_high', '$address', '$postcode', '$city', '$phone', '$mail', '$facebook', '$x', '$instagram')"); 

$count = 1;
$service_name = "";
while ($_POST["serv".$count] != null) {
    if (isset($_POST["serv".$count])) {
        $service_checked = "checked";

    } else {
        $service_checked = "";
    }
    $service_id = "serv".$count;
    echo $service_name;
    $service_name = $db->query("select name from services where id = ".$service_id."");
    echo $service_name;
    $insert = $db->query("update services set enabled = ".$service_checked." where id=".$service_id.";");
    $count++;
}

if($insert){ 
    $status = 'success'; 
    $statusMsg = "File uploaded successfully."; 
}else{ 
    $statusMsg = "File upload failed, please try again."; 
}

echo $statusMsg;

?>

