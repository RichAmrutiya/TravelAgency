
<?php
require 'dbconnect.php';
session_start();
// Retrieve user data from the database
$id = 22;
$sql = "SELECT * FROM `login` WHERE `id` = $id";
$result = mysqli_query($connection, $sql);
$userData = mysqli_fetch_assoc($result);

// Display user data
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="profile.css">
    <link rel="icon" type="image/x-icon" href="images/Logo.jpg" style="border-radius:500px">
</head>

<body>
    <section class="profile-section">
        <h1 class="section-title">User Profile</h1>
        <div class="profile">
            <div class="profile-wrapper">
                <h2>Username: <?php echo $userData['username']; ?></h2>
                <p>Email: <?php echo $userData['email']; ?></p>
            </div>
        </div>
    </section>
</body>

</html>
