<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="get" action="">
Num1:<input type="number" name="num">
Num2:<input type="number" name="num2">
<input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_GET['submit'])){
    $num1=$_GET['num'];
    $num3=$_GET['num2'];
    echo $num1-$num3;
}
?>
    </body>
    </html>