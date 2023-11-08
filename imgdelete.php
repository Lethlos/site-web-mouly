<?php

require_once 'dbConfig.php'; 

$result = $db->query("SELECT id FROM images ORDER BY id DESC");

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        if ($row != null) {
            $id = $row['id'];
            if (isset($_POST["img".$id])) {
                $delete_img = $db->query("delete from images where id='".$id."'");
                header("Location: edition_page.php");
                exit;
            }
        }
    }
}

?>