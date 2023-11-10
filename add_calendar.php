<?php

require_once 'dbConfig.php'; 

$start = (isset($_GET["start"])) ? new DateTime($_GET["start"]) : NULL;
$end = (isset($_GET["end"])) ? new DateTime($_GET["end"]) : NULL;

if ($start && $end) {
    $reservations = $db->query("SELECT start, end FROM calendar");
    while ($row = $reservations->fetch_array()) {
        $id = $row["id"];
        $startdb = new DateTime($row["start"]);
        $enddb = new DateTime($row["end"]);
        if (!($startdb > $start && $startdb < $end) || ($enddb > $start && $enddb < $end)|| ($enddb > $end && $startdb < $start)) {
            $result = $db->query("insert into `calendar` (start, end) VALUES ('".$start."', '".$end."');");
        }
    }
}
?>