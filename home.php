<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: index.php");
    exit;
}

?>




<!DOCTYPE html>
<html>

<head>
    <title>Explore - The Happiness</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="Logo.jpg">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <img src="images/Logo.jpg">
                <p  style="color: red;"> <?php echo $_SESSION['username']; ?></p>
            </div>
            
            <ul>
            
                <li><a href="home.php">Home</a></li>
                <!-- <li><a href="#">Destinations</a></li> -->
                <li><a href=international.php>International</a></li>
                <li><a href=domestic.php>Domestic</a></li>
                <li><a href="contact/contact us.php">Contact</a></li>
                <!-- <li><a href="logout.php">Logout</a></li> -->
                <li>
                    <div class="dropdown">
                        <img src="images/profilelogo.jpg" onclick="toggleDropdown()" class="dropdown-toggle" style='height:60px;'>
                        <div id="myDropdown" class="dropdown-menu">
                            <a href="yourprofile.php">Profile</a>
                            <a href="yourbooking.php">Bookings</a>
                            <a href="logout.php">Logout</a>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="random-image">
            <script src="script.js"></script>


            <h1>Welcome to Explore</h1>
            <br>
            <p>India Is Waiting For You</p>
            <a href="india_map.php" class="button1">Explore It</a>
        </section>

        <section id="testimonials">
            <h2>Recent Customers</h2>
            <div class="testimonial">
                <p>"I had an amazing trip to Europe thanks to Explore. Their staff was very helpful and
                    knowledgeable, and the itinerary they prepared for me was perfect."</p>
                <p class="author">- Vaibhav Dhanani</p>
            </div>
            <div class="testimonial">
                <p>"I highly recommend Explore to anyone looking for a stress-free and enjoyable travel experience,they truly know how to make a trip unforgettable."</p>
                <p class="author">- Rich Amrutiya</p>
            </div>

            <div class="testimonial">
                <p>"Thanks to Explore ,my dream vacation become a reality , and it was even betteer than I could have imagined!"</p>
                <p class="author">- Meet Antala</p>
            </div>
        </section>
    </main>
    <script>
        function toggleDropdown() {
            var dropdownMenu = document.getElementById("myDropdown");
            dropdownMenu.classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside
        window.onclick = function(event) {
            if (!event.target.matches('.dropdown-toggle')) {
                var dropdowns = document.getElementsByClassName("dropdown-menu");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        };
    </script>

    <footer>
        <div class="quick_links">

        </div>
        <p>&copy; 2023 Travel Agency Company Explore Happiness. All rights reserved.</p>
    </footer>
</body>

</html>