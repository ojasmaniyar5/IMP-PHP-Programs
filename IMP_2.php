QUESTION : Write a PHP script to accept uesr's name and display in on next page.




Display Pgae_1

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name Input</title>
</head>
<body>
    <h1>Enter Your Name</h1>

    <form method="post" action="display_name.php">
        <label for="userName">Name:</label>
        <input type="text" name="userName" required>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>


Display Page_2
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Name</title>
</head>
<body>
    <h1>Hello, <?php echo isset($_POST['userName']) ? htmlspecialchars($_POST['userName']) : 'Guest'; ?>!</h1>
</body>
</html>
