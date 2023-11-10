<?php

require_once 'dbConfig.php'; 

$start = (isset($_GET["start"])) ? new DateTime($_GET["start"]) : NULL;
$end = (isset($_GET["end"])) ? new DateTime($_GET["end"]) : NULL;

if ($start && $end) {
    $reservations = $db->query("SELECT * FROM calendar");
    $available = true;
    while ($row = $reservations->fetch_array()) {
        $id = $row["id"];
        $startdb = new DateTime($row["start"]);
        $enddb = new DateTime($row["end"]);
        if (($startdb > $start && $startdb < $end) || ($enddb > $start && $enddb < $end)|| ($enddb > $end && $startdb < $start)) {
            $available = false;
        }
    }
    if ($available) {
        $startstr = $start->format('Y-m-d');
        $endstr = $end->format('Y-m-d');
        $result = $db->query("insert into `calendar` (start, end) VALUES ('".$startstr."', '".$endstr."');");
    }
    echo $available;
}
else {
    if ($start > $end) {
        echo 2;
    }
    else {
        echo 0;
    }
}
?>