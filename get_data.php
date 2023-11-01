<?php

require_once 'dbConfig.php'; 

$information = $db->query("SELECT * FROM information where id='1'");
$row = mysqli_fetch_assoc($information);
if ($row != null) {
    
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

} else {
    $description = "";

    $bed = "0";
    $place = "0";
    $bedroom = "0";

    $week = "0";
    $night = "0";
    $week_high = "0";
    $night_high = "0";

    $address = "";
    $postcode = "";
    $city = "";

    $phone = "";
    $mail = "";
    $facebook = "";
    $x = "";
    $instagram = "";

}

function import_services_admin($db) {
    
    $service_name = "";
    $service_checked = "";
    
    $services = $db->query("SELECT * FROM services");
    if ($services != null) {
        $count = 1;
        while ($row = $services->fetch_array()) {
            $service_name = $row["name"];
            $service_checked = $row["enabled"];
            echo "<span> <input type=\"checkbox\" id=\"serv".$count."\" name=\"serv".$count."\" ".$service_checked." /> 
            <label name=\"servlabel".$count."\" for=\"serv".$count."\">".$service_name."</label> </span>";
            $count++;
        }
    }
}

function import_services_customer($db) {
    $service_name = "";

    $services = $db->query("SELECT * FROM services");
    if ($services != null) {
        $count = 1;
        while ($row = $services->fetch_array()) {
            if ($row["enabled"] == "checked") {
                $service_name = $row["name"];
                echo "<li> ".$service_name." </li>";
                $count++;
            }
        }
    }
}

?>