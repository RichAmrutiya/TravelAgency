<html>
<head>
  <title>Admin Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    label {
      display: block;
      margin-bottom: 10px;
    }
    input[type=text], input[type=password] {
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      width: 100%;
      box-sizing: border-box;
    }
    input[type=submit] {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    input[type=submit]:hover {
      background-color: #45a049;
    }
    .container {
      margin-top: 50px;
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
      width: 50%;
      margin: 0 auto;
    }
    .error {
      color: red;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Admin Login</h2>
    <?php
      $username_error = "";
      $password_error = "";
      $code_error = "";
      $valid = true;
      
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['username'])) {
          $username_error = "Username is required";
          $valid = false;
        }
        if (empty($_POST["password"])) {
          $password_error = "Password is required";
          $valid = false;
        }
        if (empty($_POST["code"])) {
          $code_error = "Special code is required";
          $valid = false;
        }
        // check if the special code is correct
        if ($_POST["code"] != "132527") {
          $count = 1 ; 
          $code_error = "Incorrect admin code";
          $valid = false;
        }
        if ($valid) {
          // check the username and password against the database
          // and redirect to the admin page if they are correct
          if ($_POST["username"] === "admin" && $_POST["password"] === "password") {
            header("Location: option.php");
            exit;
          } else {
            $username_error = "Invalid username or password";
            $password_error = "Invalid username or password";
          }
        }
      }

     
    ?>
    <form method="post" >
      <label for="username">Username:</label>
      <input type="text" id="username" name="username">
      <span class="error"><?php echo $username_error;?></span>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password">
      <span class="error"><?php echo $password_error;?></span>
      <label for="code">Admin code:</label>
      <input type="password" id="code" name="code">
      <span class="error"><?php echo $code_error;?></span>
      <input type="submit" value="Login">
    </form>
  </div>
</body>
</html>
