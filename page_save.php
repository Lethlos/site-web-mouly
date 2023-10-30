<?php

$statusMsg = ''; 
$status = 'error'; 
echo 'test';

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

    $insert = $db->query("INSERT into information (description, bed, place, bedroom, week, night, week_high, night_high, address, postcode, city, phone, mail, facebook, x, instagram) 
    VALUES ('$description', '$bed', '$place', '$bedroom', '$week', '$night', '$week_high', '$night_high', '$address', '$postcode', '$city', '$phone', '$mail', '$facebook', '$x', '$instagram'"); 
    if($insert){ 
        $status = 'success'; 
        $statusMsg = "File uploaded successfully."; 
    }else{ 
        $statusMsg = "File upload failed, please try again."; 
    }

echo $statusMsg;
?>

