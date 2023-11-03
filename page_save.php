<?php

require_once 'dbConfig.php';

$statusMsg = ''; 
$status = 'error'; 

#table information

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

#table services

$services_count = $db->query("select * from services");
$max_serv = mysqli_num_rows($services_count);
$count = 1;
$service_name = "";
while ($count <= $max_serv) {
    if (isset($_POST["serv".$count])) {
        $service_checked = "checked";

    } else {
        $service_checked = "";
    }
    $service_id = $count;
    $get_name = $db->query("select name from services where id = '".$service_id."'");
    $service_name = $get_name->fetch_assoc()["name"];

    $insert = $db->query("update services set enabled = '".$service_checked."' where id='".$service_id."';");
    $count++;
}

if($insert){ 
    $status = 'success'; 
    $statusMsg = "File uploaded successfully."; 
}else{ 
    $statusMsg = "File upload failed, please try again."; 
}


#table payments

$payments_count = $db->query("select * from payments");
$max_payments = mysqli_num_rows($payments_count);
$count = 1;
$payment_name = "";
while ($count <= $max_payments) {
    if (isset($_POST["payment".$count])) {
        $payment_checked = "checked";

    } else {
        $payment_checked = "";
    }
    $payment_id = $count;
    $get_name = $db->query("select name from payments where id = '".$payment_id."'");
    $payment_name = $get_name->fetch_assoc()["name"];

    $insert = $db->query("update payments set enabled = '".$payment_checked."' where id='".$payment_id."';");
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

