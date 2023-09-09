
<?php


    $servername = "localhost" ; 
    $password = "";
    $database = "project"; 
    $username = "root" ; 
   
    $connection = mysqli_connect($servername , $username , $password , $database);
    if(!$connection)
    {
        die("Error".mysqli_connect_error());
    }

    

    $price = $_POST['price'];
    $duration = $_POST['duration']; 
    $place_name = $_POST['place_name'];
    
    

    $sql = "UPDATE `international_package` SET  `duration` = '$duration' , `price` = '$price'  WHERE `place_name` = '$place_name'";

    if(mysqli_query($connection,$sql))
    {
        echo "Package Updated Successfully.";
        header("location: option.php");
    } 

    else echo "Something Went Wrong.";
    


?> 

