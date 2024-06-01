<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="post">
            Number 1:<input type="number" name="num1">
            Number 2:<input type="number" name="num2">
            <input type="radio" name="calc" value="add">Add
            <input type="radio" name="calc" value="subtract">Subtract
            <input type="radio" name="calc" value="multiply">Multiply
            <input type="radio" name="calc" value="divide">Divide
            <input type="radio" name="calc" value="mod">mod
            <input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_POST['submit'])){
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $calc=$_POST['calc'];
    switch ($calc){
        case 'add':
            echo $num1+$num2;
            break;
        case 'sub':
                echo $num1-$num2;
                break;
        case 'mul':
                 echo $num1*$num2;
                break;
        case 'div':
                echo $num1/$num2;
                    break;                 
                        case 'mod':
                        echo $num1%$num2;
                        break;
                    default:
                echo "couldnot perform";
                break;
    }
}
    
    ?>
