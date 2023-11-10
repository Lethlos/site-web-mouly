<?php

require_once 'dbConfig.php'; 

$reservationsdb = $db->query("SELECT start, end FROM calendar");
$reservations = mysqli_fetch_all($reservationsdb);

header('Content-Type: application/json');
echo json_encode($reservations);

?>