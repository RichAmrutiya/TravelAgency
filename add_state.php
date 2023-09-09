<?php

$servername = "localhost";
$password = "";
$database = "project";
$username = "root";

$connection = mysqli_connect($servername, $username, $password, $database);

if (!$connection) {
    die("Error: " . mysqli_connect_error());
}

$image1 = $_POST['image1'];
$place_name = $_POST['place_name'];
$state = $_POST['state'];

$sql = "INSERT INTO `state`(`Image`, `Place_Name`, `State`) VALUES ('$image1', '$place_name', '$state')";

if (mysqli_query($connection, $sql)) {
    echo "Places Added Successfully.";
} else {
    echo "Something Went Wrong.";
}

mysqli_close($connection);
?>