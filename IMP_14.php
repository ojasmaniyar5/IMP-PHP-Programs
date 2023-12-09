QUESTION :
Write a PHP program to display reverse of a string ?



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Reversal</title>
</head>
<body>
    <h1>String Reversal</h1>

    <?php
    // Sample string
    $originalString = "Hello, World!";

    // Display the original string
    echo "<p>Original String: $originalString</p>";

    // Reverse the string
    $reversedString = strrev($originalString);

    // Display the reversed string
    echo "<p>Reversed String: $reversedString</p>";
    ?>
</body>
</html>
