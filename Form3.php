<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form method="post">
    Username:<input type="text" name="username">
    Password:<input type="password" name="password">
    Gender:
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
    <input type="submit" name="submit" value="send info">
</form>
    <?php
    if(isset($_GET['submit'])){
        echo $_GET ['username'];
        echo $_GET['gender'];
        echo $_GET['password'];
        }
        if(gender==Male){
            echo "hello mr.";
        }
        ?>
</body>
</html>