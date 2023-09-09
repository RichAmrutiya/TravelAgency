<?php
session_start();
include "dbconnect.php"; // Assuming you have a database connection file

$target_dir = "ID IMAGES/";
$resMessage = array(); // Response message array

if (isset($_FILES['aadhaar'])) {
    $num_files = count($_FILES['aadhaar']['name']); // Number of uploaded files

    for ($i = 0; $i < $num_files; $i++) {
        $target_file = $target_dir . basename($_FILES["aadhaar"]["name"][$i]);
        $imageExt = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed_file_ext = array("jpg", "jpeg", "png");

        if (!file_exists($_FILES["aadhaar"]["tmp_name"][$i])) {
            $resMessage[$i] = "Select image to upload.";
        } else if (!in_array($imageExt, $allowed_file_ext)) {
            $resMessage[$i] = "Allowed file formats .jpg, .jpeg, and .png.";
        } else {
            if (move_uploaded_file($_FILES["aadhaar"]["tmp_name"][$i], $target_file)) {
                $sql = "INSERT INTO files (file_path) VALUES (?)";
                $stmt = mysqli_prepare($connection, $sql);
                mysqli_stmt_bind_param($stmt, "s", $param_path);
                $param_path = $target_file;
                if (mysqli_stmt_execute($stmt)) {
                   
                    $resMessage[$i] = "Image uploaded successfully.";
                    
                    // $_SESSION['person_count']--;
                    // $_SESSION['current_person_count'] = $_SESSION['person_count'];
                    $place_name = $_SESSION['place_name1'];
                    $sql = "SELECT `limit` FROM `domestic_package` WHERE `place_name` = '$place_name'";
                    $result = mysqli_query($connection,$sql);
                    // $new_limit = `domestic_package`.'limit';  
                     $sql =  "UPDATE `domestic_package` SET `limit`= `limit`- 1   WHERE  `place_name` = '$place_name'" ;
                     $result = mysqli_query($connection,$sql); 
                     header("location: domestic.php");


                }
            } else {
                $resMessage[$i] = "Image couldn't be uploaded.";
            }
        }
    }
}

// Display response messages
foreach ($resMessage as $message) {
    echo $message . "<br>";
}
?>
