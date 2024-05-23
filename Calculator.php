<!DOCTYPE html>
<!-- design a calculator like program using PHP. -->
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
<form method="post" action>
  Number 1:
    <input type="number" id="num1" name="num1" ><br><br>
Number 2:
    <input type="number" id="num2" name="num2"><br><br>

    Operator:
    <select id="operator" name="operator">
        <option value="">Select Operator</option>
        <option value="add">Addition (+)</option>
        <option value="subtract">Subtraction (-)</option>
        <option value="multiply">Multiplication (*)</option>
        <option value="divide">Division (/)</option>
    </select><br><br>
    <input type="submit" value="Calculate">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    switch ($operator) {
        case 'add':
            $result = $num1 + $num2;
            echo "Result: $num1 + $num2 = $result";
            break;
        case 'subtract':
            $result = $num1 - $num2;
            echo "Result: $num1 - $num2 = $result";
            break;
        case 'multiply':
            $result = $num1 * $num2;
            echo "Result: $num1 * $num2 = $result";
            break;
        case 'divide':
            if ($num2 == 0) {
                echo "Error: Division by zero!";
            } else {
                $result = $num1 / $num2;
                echo "Result: $num1 / $num2 = $result";
            }
            break;
        default:
            echo "Error: Invalid operator selected";
            break;
    }
}
?>
</body>
</html>
//wa php script that takes input from a form field and appends the input data to a text file named log.txt each time the form is submitted 
