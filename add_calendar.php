<?php

require_once 'dbConfig.php'; 

$start = (isset($_GET["start"])) ? new DateTime($_GET["start"]) : NULL;
$end = (isset($_GET["end"])) ? new DateTime($_GET["end"]) : NULL;

if ($start && $end) {
    $reservationsdb = $db->query("SELECT start, end FROM calendar");
    $reservations = mysqli_fetch_all($reservationsdb);
    
}
?>