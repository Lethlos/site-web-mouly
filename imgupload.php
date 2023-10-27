<?php 

function compressImage($source, $destination, $quality) { 
    // Get image info 
    $imgInfo = getimagesize($source); 
    $mime = $imgInfo['mime']; 
     
    // Create a new image from file 
    switch($mime){ 
        case 'image/jpeg': 
            $image = imagecreatefromjpeg($source); 
            break; 
        case 'image/png': 
            $image = imagecreatefrompng($source); 
            break; 
        case 'image/gif': 
            $image = imagecreatefromgif($source); 
            break; 
        default: 
            $image = imagecreatefromjpeg($source); 
    } 
     
    // Save image 
    imagejpeg($image, $destination, $quality); 
     
    // Return compressed image 
    return $destination; 
}

function convert_filesize($bytes, $decimals = 2) { 
    $size = array('B','KB','MB','GB','TB','PB','EB','ZB','YB'); 
    $factor = floor((strlen($bytes) - 1) / 3); 
    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$size[$factor]; 
}

// File upload path 
$uploadPath = "img/"; 

$statusMsg = ''; 
$status = 'danger'; 

// If file upload form is submitted 
if(isset($_POST["submit"])){ 
    // Check whether user inputs are empty 
    if(!empty($_FILES["image"]["name"])) { 
        // File info 
        $fileName = basename($_FILES["image"]["name"]);
        $imageUploadPath = $uploadPath . $fileName; 
        $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION); 

        $imageTemp = resize_image();
        
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            // Image temp source and size 
            $imageSize = convert_filesize($_FILES["image"]["size"]); 
            
            // Compress size and upload image 
            $compressedImage = compressImage($imageTemp, $imageUploadPath, 95); 
            
            if($compressedImage){ 
                $compressedImageSize = filesize($compressedImage); 
                $compressedImageSize = convert_filesize($compressedImageSize); 
                
                $status = 'success'; 
                $statusMsg = "Image compressed successfully."; 
                upload_image();
            }else{ 
                $statusMsg = "Image compress failed!"; 
            } 
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
}
echo $statusMsg;

function resize_image() {
    $maxDim = 1920;
    $file_name = $_FILES["image"]["tmp_name"];
    list($width, $height) = getimagesize( $file_name );
    if ( $width > $maxDim || $height > $maxDim ) {
        $ratio = $width/$height;
        if( $ratio > 1) {
            $new_width = $maxDim;
            $new_height = $maxDim/$ratio;
        } else {
            $new_width = $maxDim*$ratio;
            $new_height = $maxDim;
        }
        $src = imagecreatefromstring( file_get_contents( $file_name ) );
        $dst = imagecreatetruecolor( $new_width, $new_height );
        imagecopyresampled( $dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
        imagedestroy( $src );
        imagepng( $dst, $file_name ); // adjust format as needed
        imagedestroy( $dst );
        echo "image redimentionnée";
        return($file_name);

    }
    else
    {
        return($file_name);
    }
}


function upload_image() {
    // Include the database configuration file  
    require_once 'dbConfig.php'; 

    if(isset($_POST["submit"])){ 
        $status = 'error'; 
        if(!empty($_FILES["image"]["name"])) { 
            // Get file info 
            $fileName = basename($_FILES["image"]["name"]); 
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
             
            // Allow certain file formats 
            $allowTypes = array('jpg','png','jpeg','gif'); 
            if(in_array($fileType, $allowTypes)){ 
                $image = $_FILES['image']['tmp_name']; 
                $imgContent = addslashes(file_get_contents($image)); 
             
                // Insert image content into database 
                $insert = $db->query("INSERT into images (image, created) VALUES ('$imgContent', NOW())"); 
                 
                if($insert){ 
                    $status = 'success'; 
                    $statusMsg = "File uploaded successfully."; 
                }else{ 
                    $statusMsg = "File upload failed, please try again."; 
                }  
            }else{ 
                $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
            } 
        }else{ 
            $statusMsg = 'Please select an image file to upload.'; 
        } 
    } 
}