<?php
if (isset($_POST["upload"])) {  
    //Get the file information  
    $userfile_name = $_FILES["image"]["name"];  
    $userfile_tmp = $_FILES["image"]["tmp_name"];  
    $userfile_size = $_FILES["image"]["size"];  
    $filename = basename($_FILES["image"]["name"]);  
    $file_ext = substr($filename, strrpos($filename, ".") + 1);  
  
    //Only process if the file is a JPG and below the allowed limit  
    if((!emptyempty($_FILES["image"])) && ($_FILES["image"]["error"] == 0)) {  
        if (($file_ext!="jpg") && ($userfile_size > $max_file)) {  
            $error= "ONLY jpeg images under 1MB are accepted for upload";  
        }  
    }else{  
        $error= "Select a jpeg image for upload";  
    }  
    //Everything is ok, so we can upload the image.  
    if (strlen($error)==0){  
  
        if (isset($_FILES["image"]["name"])){  
  
            move_uploaded_file($userfile_tmp, $large_image_location);  
            chmod ($large_image_location, 0777);  
  
            $width = getWidth($large_image_location);  
            $height = getHeight($large_image_location);  
            //Scale the image if it is greater than the width set above  
            if ($width > $max_width){  
                $scale = $max_width/$width;  
                $uploaded = resizeImage($large_image_location,$width,$height,$scale);  
            }else{  
                $scale = 1;  
                $uploaded = resizeImage($large_image_location,$width,$height,$scale);  
            }  
            //Delete the thumbnail file so the user can create a new one  
            if (file_exists($thumb_image_location)) {  
                unlink($thumb_image_location);  
            }  
        }  
        //Refresh the page to show the new uploaded image  
        header("location:".$_SERVER["PHP_SELF"]);  
        exit();  
    }  
}  

?>