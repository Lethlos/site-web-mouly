<?php

$reservations = [
    ["start"=> "2023-11-05","end"=> "2023-11-10"],
    ["start"=> "2023-11-15","end"=> "2023-11-20"],
    ["start"=> "2023-11-22","end"=> "2023-11-23"],
];
header('Content-Type: application/json');
echo json_encode($reservations);

?>