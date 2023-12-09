QUESTION : 
Write a PHP program to display following operations on String :
1) String Concatenation.
2) String Comparison.



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Operations</title>
</head>
<body>
    <h1>String Operations</h1>

    <?php
    // String Concatenation
    $string1 = "Hello";
    $string2 = "World";
    $concatenatedString = $string1 . " " . $string2;

    echo "<p>1. String Concatenation:</p>";
    echo "<p>$string1 . \" \" . $string2 = $concatenatedString</p>";

    // String Comparison
    $strA = "apple";
    $strB = "banana";

    echo "<p>2. String Comparison:</p>";
    echo "<p>Comparing \"$strA\" and \"$strB\":</p>";

    if (strcmp($strA, $strB) == 0) {
        echo "<p>The strings are equal.</p>";
    } elseif (strcmp($strA, $strB) < 0) {
        echo "<p>\"$strA\" comes before \"$strB\".</p>";
    } else {
        echo "<p>\"$strA\" comes after \"$strB\".</p>";
    }
    ?>
</body>
</html>
