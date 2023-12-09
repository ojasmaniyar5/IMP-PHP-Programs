QUESTION :
Write a PHP program to reverse an array ?


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Reversal</title>
</head>
<body>
    <h1>Array Reversal</h1>

    <?php
    // Sample array
    $originalArray = array(1, 2, 3, 4, 5);

    // Display the original array
    echo "<p>Original Array: " . implode(", ", $originalArray) . "</p>";

    // Reverse the array
    $reversedArray = array_reverse($originalArray);

    // Display the reversed array
    echo "<p>Reversed Array: " . implode(", ", $reversedArray) . "</p>";
    ?>
</body>
</html>
