<?php
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 0;
        $FileType = pathinfo($target_file,PATHINFO_EXTENSION);
        
        if(isset($_POST['submit'])) {
	if ($uploadOk == 0)
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file))
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
         header("Location:home.html");      
        }
?>

