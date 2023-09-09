<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact_style.css">
  </head>
  
<body style="background-image: url('b.jpg');">
    
  <section id="m">
    <div class="main_pac">
      <div class="img">

        <a href="map.html"><img src="location.jpg" style="height: 70px; width: 70px; border-radius: 40px;" ></a>
        

      </div>
      <div class="text">
        <center>
        <b>OUR MAIN OFFICE</b>
        <div class="text1">
          <p>Stadium Rd, Motera,<br> Ahmedabad, Gujarat</p>
        </div>
        </center>
      </div>
    </div>
    


    <div class="main_pac">
      <div class="img">
        <img src="call.webp" style="height: 70px; width: 70px;">
      </div>
      <div class="text">
        <center>
        <b>PHONE NUMBER</b>
        <div class="text1">
          <p>+91 78619 79302<br>+91 63532 49404<br>+91 93132 17743</p>
        </div>
        </center>
      </div>
    </div>


    <div class="main_pac">
      <div class="img">
        <img src="mail.jpg" style="height: 70px; width: 70px; border-radius: 40px;">
      </div>
      <div class="text">
        <center>
        <b>EMAIL</b>
        <div class="text1">
          <p>meetantala36@gmail.com<br>vaibhav123@gmail.com<br>rich101@gmail.com</p>
        </div>
        </center>
      </div>
    </div>
  </section>

  <div class="contact-form">
    <form action="contact.php" method="POST">
      <center><h1>Contact Us</h1></center>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" required></textarea>

      <center><button type="submit" name="submit">Submit</button></center>
    </form>
  </div>
  <script src="contact.js"></script>
</body>
</html>
