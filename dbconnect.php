<?php
$server="localhost";
$usernm="root";
$pass="";
$dbname="project";
$connection=mysqli_connect($server,$usernm,$pass,$dbname);
if(!$connection)
die("Error".mysqli_connect_error()); 
?>