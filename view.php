<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 
// Get image data from database 
$result = $db->query("SELECT image FROM images ORDER BY id DESC"); 
?>

<!-- Display images with BLOB data from database -->
<?php if($result->num_rows > 0){ ?> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <div class="element">
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
            </div>
        <?php } ?> 
<?php }else{ ?> 
    <p class="status error">Aucune image...</p> 
<?php } ?>