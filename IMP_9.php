QUESTION :
Write a PHP program to create login page and welcome user on next page.


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1>Login Page</h1>

    <form method="post" action="welcome.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>
    <h1>Welcome Page</h1>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
        // Get the entered username and password
        $enteredUsername = $_POST["username"];
        $enteredPassword = $_POST["password"];

        // Predefined username and password
        $validUsername = "user123";
        $validPassword = "password123";

        // Check if entered credentials are valid
        if ($enteredUsername === $validUsername && $enteredPassword === $validPassword) {
            echo "<p>Welcome, $validUsername!</p>";
        } else {
            echo "<p>Invalid username or password. Please try again.</p>";
        }
    } else {
        // Redirect to the login page if accessed directly without submitting the form
        header("Location: index.php");
        exit();
    }
    ?>
</body>
</html>
