<?php

if(isset($_POST["submit"])){ 
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
    echo "coucou test\noezijdoizjd";
}

