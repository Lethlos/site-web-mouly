<?php

require_once 'dbConfig.php'; 

$statusMsg = ''; 
$status = 'error'; 
echo 'test';

    $description = $_POST['user_message'];
    echo $description."\n";
    
    $bed = $_POST['inputBed'];
    echo $bed."\n";
    $place = $_POST['inputPlace'];
    echo $place."\n";
    $bedroom = $_POST['inputRoom'];
    echo $bedroom."\n";
    
    $week = $_POST['inputPriceWeek'];
    echo $week."\n";
    $night = $_POST['inputPriceNight'];
    echo $night."\n";
    $week_high = $_POST['inputPriceHighWeek'];
    echo $week_high."\n";
    $night_high = $_POST['inputPriceHighNight'];
    echo $night_high."\n";

    $address = $_POST['inputAdress'];
    echo $address."\n";
    $postcode = $_POST['inputCP'];
    echo $postcode."\n";
    $city = $_POST['inputCity'];
    echo $city."\n";

    $phone = $_POST['inputNumTel'];
    echo $phone."\n";
    $mail = $_POST['inputMail'];
    echo $mail."\n";
    $facebook = $_POST['inputFacebook'];
    echo $facebook."\n";
    $x = $_POST['inputX'];
    echo $description."\n";
    $instagram = $_POST['inputInsta'];
    echo $description."\n";

    $insert = $db->query("INSERT into information (description, bed, place, bedroom, week, night, week_high, night_high, address, postcode, city, phone, mail, facebook, x, instagram) VALUES ('$description', '$bed', '$place', '$bedroom', '$week', '$night', '$week_high', '$night_high', '$address', '$postcode', '$city', '$phone', '$mail', '$facebook', '$x', '$instagram'"); 
    if($insert){ 
        $status = 'success'; 
        $statusMsg = "File uploaded successfully."; 
    }else{ 
        $statusMsg = "File upload failed, please try again."; 
    }

echo $statusMsg;
?>

