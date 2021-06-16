<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>BMI homework</title>
</head>

<body>
    <div>
        <h1>Calculate Your Body<br> Mass Index</h1>
        <form action="" method="POST">
            <label for="weight">Enter your weight in kilograms (example: 99)</label><br>
            <input type="text" id="weight" name="weight" placeholder="Enter your weight here:">
            <br>
            <label for="height">Enter your height in centimeters(example: 185)</label><br>
            <input type="text" id="height" name="height" placeholder="Enter your height here:">
            <br>
            <input type="submit" value="Submit">

            <?php
            $weight = $_POST['weight'];
            $height = $_POST['height'];

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (!isset($weight) || empty($weight))
                    print('<h3 style="color: red">Please enter your weight!</h3>');
                        
                if (!isset($_POST['height']) || empty($height))
                    print('<h3 style="color: red">Please enter your height!</h3>');

                if (!is_numeric($weight) || $weight == 0|| !is_numeric($height) ||$height == 0) {
                    print('<h3 style="color: red">Wrong input (use numbers) !</h3>');
                } else {
                    $calcHeight =$height / 100;
                    $bmi = $weight / ($calcHeight * $calcHeight);
                    // echo "<h3 style=\"color: green\">$bmi</h3>";
                    switch ($bmi) {
                        case $bmi >= 30:print('<h3 style="color: green">Your are Tank !</h3>');
                            break;
                        case $bmi < 30 && $bmi > 25:print('<h3 style="color: green">Your are Overweight !</h3>');
                            break;
                        case $bmi < 25 && $bmi >18.5 :print('<h3 style="color: green">Your are Normal !</h3>');
                            break;
                        case $bmi < 18.5:print('<h3 style="color: green">Your are Skinny !</h3>');
                            break;
                        default: print('<h3 style="color: red">Wrong input !</h3>');
                    }
                }
            } 
            ?>

        </form>
    </div>


</body>

</html>