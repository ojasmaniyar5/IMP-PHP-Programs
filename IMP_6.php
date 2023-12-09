QUESTION : 
Write a PHP function to calculate factorial of a number using recursion.



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
</head>
<body>
    <h1>Factorial Calculator</h1>

    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" required>
        <button type="submit" name="calculateFactorial">Calculate Factorial</button>
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["calculateFactorial"])) {
        // Get the entered number
        $number = $_POST["number"];

        // Validate that the number is a non-negative integer
        if (is_numeric($number) && $number >= 0 && intval($number) == $number) {
            // Call the factorial function and display the result
            $factorial = calculateFactorial($number);
            echo "<p>The factorial of $number is: $factorial</p>";
        } else {
            echo "<p>Please enter a non-negative integer.</p>";
        }
    }

    // Function to calculate factorial using recursion
    function calculateFactorial($n) {
        if ($n == 0 || $n == 1) {
            return 1;
        } else {
            return $n * calculateFactorial($n - 1);
        }
    }
    ?>
</body>
</html>
