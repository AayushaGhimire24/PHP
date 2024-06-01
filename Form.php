<html>
    <head>
        <title></title>
    </head>
    <body>
    <form method="post" action=""> <!--<form method="get" action=""> get use
         garyo vane mathi ko bar ma sav info aaucha-->
            Username:<input type="text" name="username"><br>
            password:<input type="password" name="pass"><br>
            <input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_GET['submit'])){
echo $_GET['username'];//supper global array uppercase mai huncha
echo $_GET['pass'];
}
?>
</body>
</html>
