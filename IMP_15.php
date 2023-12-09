QUESTION :
Write a PHP program to find the sum of digit of a given number.




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Digits</title>
</head>
<body>
    <h1>Sum of Digits</h1>

    <?php
    // Function to calculate the sum of digits
    function sumOfDigits($number) {
        $sum = 0;
        while ($number > 0) {
            $sum += $number % 10; // Get the last digit
            $number = (int)($number / 10); // Remove the last digit
        }
        return $sum;
    }

    // Sample number
    $originalNumber = 12345;

    // Display the original number
    echo "<p>Original Number: $originalNumber</p>";

    // Calculate and display the sum of digits
    $sum = sumOfDigits($originalNumber);
    echo "<p>Sum of Digits: $sum</p>";
    ?>
</body>
</html>
