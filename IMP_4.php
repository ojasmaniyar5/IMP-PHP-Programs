QUESTION :
Write a PHP progarm to display multiplication table of enterd value.




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
    <h1>Multiplication Table</h1>

    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" required>
        <button type="submit" name="generateTable">Generate Table</button>
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["generateTable"])) {
        // Get the entered number
        $number = $_POST["number"];

        echo "<h2>Multiplication Table for $number</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Multiplier</th><th>Result</th></tr>";

        // Generate and display the multiplication table
        for ($i = 1; $i <= 10; $i++) {
            $result = $number * $i;
            echo "<tr><td>$number x $i</td><td>$result</td></tr>";
        }

        echo "</table>";
    }
    ?>
</body>
</html>
