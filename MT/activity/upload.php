<?php 
if(!empty($_FILES)){ 
    // Include the database configuration file 
    require 'dbconfig.php'; 
   
    // Upload file to server 
    if(is_uploaded_file($_FILES['file']['tmp_name'])){ 
        // Insert file information in the database 
        $sql = "INSERT INTO tblupload (file_name, uploaded_on) VALUES ('".$fileName."', NOW())"; 
        $insert = $conn->query($sql);
    } 
} 
?>
 
