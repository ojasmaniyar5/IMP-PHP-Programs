QUESTION :
Write a code in PHP which accepts two string from user and displays them after concatenation.




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Concatenation</title>
</head>
<body>
    <h1>String Concatenation</h1>

    <form method="post" action="">
        <label for="string1">Enter the first string:</label>
        <input type="text" name="string1" required>
        <br>
        <label for="string2">Enter the second string:</label>
        <input type="text" name="string2" required>
        <br>
        <button type="submit" name="concatenateStrings">Concatenate Strings</button>
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["concatenateStrings"])) {
        // Get the entered strings
        $string1 = $_POST["string1"];
        $string2 = $_POST["string2"];

        // Concatenate the strings
        $concatenatedString = $string1 . $string2;

        // Display the result
        echo "<p>Concatenated String: $concatenatedString</p>";
    }
    ?>
</body>
</html>
