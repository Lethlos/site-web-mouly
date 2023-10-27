<?php

include 'xml_save.php';
$rent = new SimpleXMLElement($xmlstr);

if(isset($_POST["submit"])){ 
    $rent->description = $_POST['user_message'];
    
    $rent->capacity->bed = $_POST['inputBed'];
    $rent->capacity->place = $_POST['inputPlace'];
    $rent->capacity->bedroom = $_POST['inputRoom'];
    
    $rent->price->week = $_POST['inputPriceWeek'];
    $rent->price->night = $_POST['inputPriceNight'];
    $rent->price->week_high = $_POST['inputPriceHighWeek'];
    $rent->price->night_high = $_POST['inputPriceHighNight'];

    $rent->location->address = $_POST['inputAdress'];
    $rent->location->postcode = $_POST['inputCP'];
    $rent->location->city = $_POST['inputCity'];

    $rent->contact->phone = $_POST['inputNumTel'];
    $rent->contact->mail = $_POST['inputMail'];
    $rent->contact->facebook = $_POST['inputFacebook'];
    $rent->contact->x = $_POST['inputX'];
    $rent->contact->instagram = $_POST['inputInsta'];
    echo "<script>console.log('Debug Objects: " . "page_save" . "' );</script>";
}