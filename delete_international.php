
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

    

    $place_name = $_POST['place_name'];
    
    

    $sql = "DELETE FROM `international_package` WHERE  `place_name` = '$place_name'";

    if(mysqli_query($connection,$sql))
    {
        echo "Package Deleted Successfully.";
        header("location: option.php");
    } 

    else echo "Something Went Wrong.";
    


?> 

