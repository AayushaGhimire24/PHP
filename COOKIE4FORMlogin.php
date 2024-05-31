<html>
    <head>
        <title></title>
    </head>
    <body>
    <form method="post" action=""> 
            Firstname:<input type="text" name="username"><br>
            Email:<input type="text" name="email"><br>
            <input type="submit" name="login" value="login">
</form>
<?php
if(isset($_GET['submit'])){
echo $_GET['firstname'];
echo $_GET['email'];
}
?>
</body>
</html>
