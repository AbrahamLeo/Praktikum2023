<?php
    $target_dir = "uploads/";
    $target_path = $target_dir . basename($_FILES['uploadedfile'] ['name']);
    if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded";
    } else{
    echo "There was an error uploading the file, please try again!";
    }

?>  