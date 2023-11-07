<?php

require_once 'dbConfig.php'; 


$result = $db->query("SELECT id FROM images ORDER BY id DESC");

if($result->num_rows > 0){
    $count = 0;
    while($row = $result->fetch_assoc()){
        if ($row != null) {
            $id = $row['id'];
            echo"<span>
                    <input type=\"checkbox\" id=\"img".$id."\" name=\"img".$id."\"  />
                    <label for=\"img".$id."\">image ".$count."</label>
                </span>";
            $count++;
        }
    }
}


?>