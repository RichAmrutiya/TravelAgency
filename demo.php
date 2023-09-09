<?php
session_start();
include 'dbconnect.php';

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: index.php");
    exit;
}

// Retrieve the user's current password from the database
$username = $_SESSION['username'];
$sql = "SELECT * FROM `login` WHERE `username`='$username'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
$current_password = $row['password'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['old_password']) && isset($_POST['new_password']) && isset($_POST['confirm_password'])) {
        $old_password = $_POST['old_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];

        // Verify the old password
        if ($old_password === $current_password) {
            // Check if the new password matches the confirmed password
            if ($new_password === $confirm_password) {
                // Update the password in the database
                $update_sql = "UPDATE `login` SET `password`='$new_password' WHERE `username`='$username'";
                mysqli_query($connection, $update_sql);
                header("location: home.php");
                exit;
            } else {
                $error = "New password and confirm password do not match.";
            }
        } else {
            $error = "Old password is incorrect.";
        }
    }
}
?>


