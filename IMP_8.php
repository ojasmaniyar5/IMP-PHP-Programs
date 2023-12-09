QUESTION :
Write a menu friven program in PHP to display arithmatic operations.




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Calculator</title>
</head>
<body>
    <h1>Arithmetic Calculator</h1>

    <form method="post" action="">
        <label for="num1">Enter the first number:</label>
        <input type="number" name="num1" required>
        <br>
        <label for="num2">Enter the second number:</label>
        <input type="number" name="num2" required>
        <br>

        <label for="operation">Select an operation:</label>
        <select name="operation">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select>

        <br>
        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["calculate"])) {
        // Get the entered numbers and operation
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];

        // Perform the selected arithmetic operation
        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                $operationSymbol = "+";
                break;
            case "subtract":
                $result = $num1 - $num2;
                $operationSymbol = "-";
                break;
            case "multiply":
                $result = $num1 * $num2;
                $operationSymbol = "*";
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    $operationSymbol = "/";
                } else {
                    $result = "Undefined (division by zero)";
                    $operationSymbol = "";
                }
                break;
            default:
                $result = "Invalid operation";
                $operationSymbol = "";
        }

        // Display the result
        echo "<p>Result: $num1 $operationSymbol $num2 = $result</p>";
    }
    ?>
</body>
</html>
