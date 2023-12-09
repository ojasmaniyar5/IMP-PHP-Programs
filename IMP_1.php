QUESTION : 
Write a PHP program to calculate area of circle and triangle.



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Calculator</title>
</head>
<body>
    <h1>Area Calculator</h1>

    <form method="post" action="">
        <!-- Circle -->
        <label for="circleRadius">Enter the radius of the circle:</label>
        <input type="number" step="0.01" name="circleRadius" required>
        <button type="submit" name="calculateCircle">Calculate Circle Area</button>
        <br>

        <!-- Triangle -->
        <label for="triangleBase">Enter the base of the triangle:</label>
        <input type="number" step="0.01" name="triangleBase" required>
        <label for="triangleHeight">Enter the height of the triangle:</label>
        <input type="number" step="0.01" name="triangleHeight" required>
        <button type="submit" name="calculateTriangle">Calculate Triangle Area</button>
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the calculateCircle button is clicked
        if (isset($_POST["calculateCircle"])) {
            $radius = $_POST["circleRadius"];
            $circleArea = calculateCircleArea($radius);
            echo "<p>The area of the circle with radius $radius is: $circleArea</p>";
        }

        // Check if the calculateTriangle button is clicked
        if (isset($_POST["calculateTriangle"])) {
            $base = $_POST["triangleBase"];
            $height = $_POST["triangleHeight"];
            $triangleArea = calculateTriangleArea($base, $height);
            echo "<p>The area of the triangle with base $base and height $height is: $triangleArea</p>";
        }
    }

    // Function to calculate the area of a circle
    function calculateCircleArea($radius) {
        return M_PI * $radius * $radius;
    }

    // Function to calculate the area of a triangle
    function calculateTriangleArea($base, $height) {
        return 0.5 * $base * $height;
    }
    ?>
</body>
</html>
