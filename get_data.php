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
            $service_id = $row["id"];
            $service_name = $row["name"];
            $service_checked = $row["enabled"];
            echo "<span> <input type=\"checkbox\" id=\"serv".$service_id."\" name=\"serv".$service_id."\" ".$service_checked." /> 
            <label id=\"servlabel".$count."\" name=\"servlabel".$count."\" for=\"serv".$service_id."\">".$service_name."</label> </span>";
            $count++;
        }
    }
}

function import_services_customer($db) {
    $service_name = "";

    $services = $db->query("SELECT * FROM services");
    if ($services != null) {
        while ($row = $services->fetch_array()) {
            if ($row["enabled"] == "checked") {
                $service_name = $row["name"];
                echo "<li> ".$service_name." </li>";
            }
        }
    }
}

function import_payments_admin($db) {
    $payment_name = "";
    $payment_checked = "";
    
    $payments = $db->query("SELECT * FROM payments");
    if ($payments != null) {
        $count = 1;
        while ($row = $payments->fetch_array()) {
            $payment_id = $row["id"];
            $payment_name = $row["name"];
            $payment_checked = $row["enabled"];
            echo "<span> <input type=\"checkbox\" id=\"payment".$payment_id."\" name=\"payment".$payment_id."\" ".$payment_checked." /> 
            <label id=\"paymentlabel".$count."\" name=\"paymentlabel".$count."\" for=\"payment".$payment_id."\">".$payment_name."</label> </span>";
            $count++;
        }
    }
}

function import_payments_customer($db) {
    $payment_name = "";

    $payments = $db->query("SELECT * FROM payments");
    if ($payments != null) {
        while ($row = $payments->fetch_array()) {
            if ($row["enabled"] == "checked") {
                $payment_name = $row["name"];
                echo "<li> ".$payment_name." </li>";
            }
        }
    }
}
?>