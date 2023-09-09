<?php
include 'dbconnect.php';
session_start();

// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true){
//     header("location: index.php");
//     exit ; 
// }
?>





<!DOCTYPE html>
<html>

<head>
    <title>Explore - The Happiness</title>
    <style>
        body {
            background-color: #ccc;
            /* background-image: url('https://source.unsplash.com/random'); */
            background-repeat: no-repeat;
        }
        .center {
            font-size : 44px ; 
            text-align: center;
            height : 700px ; 
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            font-size : 25px ; 
        }

        .people {
            margin-bottom: 30px;
            margin-top: 30px;
        }

        input[type="text"],
        input[type="tel"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            color: #fff;
            border: none;
            cursor: pointer;
            width: 100px;
            padding: 5px 10px;
            font-size: 20px;
            background-color: red;
            margin-top: 5px;
        }

        input[type="submit"]:hover {
            background-color: #fff;
            color: red;
        }

        input[type="submit"]:focus {
            outline: none;
        }

        input:required {
            border-color: #4CAF50;
        }

        input:focus:invalid {
            border-color: #f44336;
        }

        input:focus:valid {
            border-color: #4CAF50;
        }

        #names label {
            display: inline-block;
            width: 100px;
            margin-bottom: 10px;
        }

        #names input,
        #names select {
            width: 200px;
            padding: 5px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
        }

        #names input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        #names input[type="submit"]:hover {
            background-color: #0062cc;
        }
        
    </style>
    <link rel="icon" type="image/x-icon" href="Logo.jpg" style="border-radius:500px">
</head>

<body>
    <div class="center">
        <h1>Travel Package Booking</h1>
        <?php
        

        require 'dbconnect.php';
        $id=$_GET['id'];
        $sql = "SELECT `id`, `image1`, `image2`, `image3`, `price`, `duration`, `place_name`,`departure_place`,`departure_date`, `link` FROM `domestic_package` WHERE `id` = $id";
        $result = $connection->query($sql);
        $i=1;

        if (1) {
            $row = $result->fetch_assoc() ; 

         
        echo '<h2>' . $row['place_name'] . '</h2>';
        echo '<p>Price per person: ₹ '. $row['price'] . '</p>';
        echo '<p>Duration: ' . $row['duration'] . '</p>';
        echo '<p>Departure date: ' . $row['departure_date'] . '</p>';
        echo '<p>Departure place: ' . $row['departure_place'] . '</p>';
        $_SESSION['place_name1'] = $row['place_name'];
        }
        ?>
    </div>
    <form method="post" action="aadhaar_d.php">
        <label class="people" for="num_people">Number of People:</label>
        <select name="num_people" id="num_people">
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>

        </select>
        <br>

        <div id="names">

        </div>

        <input type="submit" value="Next">
    </form>

    <script>
        var numPeopleSelect = document.getElementById('num_people');
        var namesDiv = document.getElementById('names');

        numPeopleSelect.addEventListener('change', function () {
            var numPeople = parseInt(numPeopleSelect.value);
            namesDiv.innerHTML = '';

            for (var i = 1; i <= numPeople; i++) {
                var labelName = document.createElement('label');
                labelName.textContent = 'Name ' + i + ':';

                var inputName = document.createElement('input');
                inputName.type = 'text';
                inputName.name = 'name[]';
                inputName.required = true;

                var labelGender = document.createElement('label');
                labelGender.textContent = 'Gender ' + i + ':';

                var selectGender = document.createElement('select');
                selectGender.name = 'gender[]';
                selectGender.required = true;

                var optionMale = document.createElement('option');
                optionMale.value = 'male';
                optionMale.text = 'Male';
                selectGender.appendChild(optionMale);

                var optionFemale = document.createElement('option');
                optionFemale.value = 'female';
                optionFemale.text = 'Female';
                selectGender.appendChild(optionFemale);

                var optionOther = document.createElement('option');
                optionOther.value = 'other';
                optionOther.text = 'Other';
                selectGender.appendChild(optionOther);

                var br1 = document.createElement('br');

                var labelAge = document.createElement('label');
                labelAge.textContent = 'Age ' + i + ':';

                var inputAge = document.createElement('input');
                inputAge.type = 'number';
                inputAge.name = 'age[]';
                inputAge.required = true;
                inputAge.min = 1;
                inputAge.max = 120;

                var br2 = document.createElement('br');

                var labelPhone = document.createElement('label');
                labelPhone.textContent = 'Phone Number ' + i + ':';

                var inputPhone = document.createElement('input');
                inputPhone.type = 'tel';
                inputPhone.name = 'phone[]';
                inputPhone.required = true;
                inputPhone.pattern = '[0-9]{10}';

                var br3 = document.createElement('br');
                var br4 = document.createElement('br');
                var hr = document.createElement('hr');

                namesDiv.appendChild(labelName);
                namesDiv.appendChild(inputName);
                namesDiv.appendChild(br1);

                namesDiv.appendChild(labelGender);
                namesDiv.appendChild(selectGender);
                namesDiv.appendChild(br2);

                namesDiv.appendChild(labelAge);
                namesDiv.appendChild(inputAge);
                namesDiv.appendChild(br3);

                namesDiv.appendChild(labelPhone);
                namesDiv.appendChild(inputPhone);
                namesDiv.appendChild(br4);
                namesDiv.appendChild(hr);
            }
        });
    </script>

</body>

</html>