<?php
require 'dbconnect.php';

$count=0;
$username=$_POST['username'];
$password=$_POST['password'];
// $email=$_POST['email'];
$sql="SELECT * FROM `login`";
$result=mysqli_query($connection,$sql);

for ($i=0; $i < mysqli_num_rows($result) ; $i++) { 
    $row=mysqli_fetch_array($result);
    if($username===$row['username'] && $password===$row['password'] )
    {
        $count=1;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: home.php");
    }
}
if($count)
{   
    echo '<script>alert("Email or Password is not correct.")</script>';
    include("index.php");
}
?>
