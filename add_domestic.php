
<?php


$servername = "localhost";
$password = "";
$database = "project";
$username = "root";

$connection = mysqli_connect($servername, $username, $password, $database);
if (!$connection) {
    die("Error" . mysqli_connect_error());
}

$image1 = $_POST['image1'];
$image2 = $_POST['image2'];
$image3 = $_POST['image3'];

$price = $_POST['price'];
$duration = $_POST['duration'];
$place_name = $_POST['place_name'];



$sql = "INSERT INTO `domestic_package`(`image1`, `image2`, `image3`, `price`, `duration`, `place_name`) VALUES ('$image1','$image2','$image3','$price','$duration','$place_name')";

if (mysqli_query($connection, $sql)) {
    echo "Package Added Successfully.";
    header("location: option.php");
} else echo "Something Went Wrong.";



?> 

