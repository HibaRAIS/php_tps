<?php

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $target_dir = "uploads/";
  
    $target_file = $target_dir. basename($_FILES["pdfFile"]["name"]);
    echo $target_file;
    echo "<br>";
    $uploadOk = 1;
    $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    echo $FileType;
    echo "<br>";

    if ($_FILES["pdfFile"]["size"] > 1000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    if($FileType != "pdf"){
        echo "Sorry, your file is not pdf.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
       // if everything is ok, try to upload file
       } else {
        if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["pdfFile"]["name"])). "
           has been uploaded.";
            } else {
            echo "Sorry, there was an error uploading your file.";
            }
           

    }
}
?>