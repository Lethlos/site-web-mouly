<?php

require_once 'dbConfig.php'; 

$start = (isset($_GET["start"])) ? new DateTime($_GET["start"]) : NULL;

if ($start) {
    $reservations = $db->query("SELECT start, end FROM calendar");
    while ($row = $reservations->fetch_array()) {
        $id = $row["id"];
        $startdb = $row["start"];
        if ($start == $startdb) {
            $delete = $db->query("DELETE from calendar where id = ".$id."");
        }
    }
}
?>