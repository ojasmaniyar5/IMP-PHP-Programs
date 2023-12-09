QUESTION :
Write a PHP program to use multiple checkbox to select hobbies.



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobbies Selection</title>
</head>
<body>
    <h1>Select Your Hobbies</h1>

    <form method="post" action="">
        <label for="hobbies">Choose your hobbies:</label><br>
        <input type="checkbox" name="hobbies[]" value="reading"> Reading<br>
        <input type="checkbox" name="hobbies[]" value="writing"> Writing<br>
        <input type="checkbox" name="hobbies[]" value="drawing"> Drawing<br>
        <input type="checkbox" name="hobbies[]" value="programming"> Programming<br>

        <br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
        // Check if any hobbies are selected
        if (isset($_POST["hobbies"])) {
            echo "<h2>Your Selected Hobbies:</h2>";
            echo "<ul>";
            // Loop through selected hobbies and display them
            foreach ($_POST["hobbies"] as $selectedHobby) {
                echo "<li>$selectedHobby</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No hobbies selected.</p>";
        }
    }
    ?>
</body>
</html>
