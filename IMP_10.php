QUESTION :
Write a PHP Program to check whether given year is leap year or not (use if else).



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year Checker</title>
</head>
<body>
    <h1>Leap Year Checker</h1>

    <form method="post" action="">
        <label for="year">Enter a year:</label>
        <input type="number" name="year" required>
        <button type="submit" name="checkLeapYear">Check Leap Year</button>
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["checkLeapYear"])) {
        // Get the entered year
        $year = $_POST["year"];

        // Check if the year is a leap year
        if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
            echo "<p>$year is a leap year.</p>";
        } else {
            echo "<p>$year is not a leap year.</p>";
        }
    }
    ?>
</body>
</html>
