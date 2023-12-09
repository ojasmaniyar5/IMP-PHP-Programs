QUESTION :
Write a PHP program to print greatest number among given 3 numbers.





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greatest Number</title>
</head>
<body>
    <h1>Greatest Number Finder</h1>

    <form method="post" action="">
        <label for="num1">Enter the first number:</label>
        <input type="number" name="num1" required>
        <br>
        <label for="num2">Enter the second number:</label>
        <input type="number" name="num2" required>
        <br>
        <label for="num3">Enter the third number:</label>
        <input type="number" name="num3" required>
        <br>
        <button type="submit" name="findGreatest">Find Greatest Number</button>
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["findGreatest"])) {
        // Get the entered numbers
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];

        // Find the greatest number
        $greatestNumber = max($num1, $num2, $num3);

        // Display the result
        echo "<p>The greatest number among $num1, $num2, and $num3 is: $greatestNumber</p>";
    }
    ?>
</body>
</html>
