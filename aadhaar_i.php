<!DOCTYPE html>
<html>

<head>
    <title>Upload Aadhaar Card</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .form-container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="file"] {
            display: block;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            width: 100%;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Upload Aadhaar Card</h2>
        <form action="upload_i.php" method="post" enctype="multipart/form-data">
            <div id="file_inputs">
                <?php
                session_start();
                $num_persons = $_POST['num_people']; // Change this to the appropriate value for your use case

                $_SESSION['count'] = $num_persons;
                for ($i = 1; $i <= $num_persons; $i++) {
                    echo "<div class=\"form-group\">";
                    echo "<label for=\"aadhaar$i\">Aadhaar Card $i:</label>";
                    echo "<input type=\"file\" id=\"aadhaar$i\" name=\"aadhaar[]\" required>";
                    echo "</div>";
                    echo "<div class=\"form-group\">";
                    echo "<label for=\"VISA$i\"> Your VISA $i:</label>";
                    echo "<input type=\"file\" id=\"visa$i\" name=\"visa[]\" required>";
                    echo "</div>";
                    echo "<br>";
                    echo "<hr><hr>";
                    echo "<br>";
                }
                ?>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

</body>

</html>