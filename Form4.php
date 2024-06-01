
<!doctype html>
<html lang="en">
<head>
    <title>Form Validation</title>
    <style>
        span{
            color: red;
        }
    </style>
</head>
<body>
<?php
$errName = '';
$errPhone = '';
$errAddress = '';
$errEmail = '';
$errGender = '';
$errCountry = '';
$errHobbies='';
if(isset($_POST['submit'])){
    $err = 1;
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $hobbies=$_POST['hobbies'];
//    $gender = $_POST['gender'];
    if(empty($name)){
        $errName =  "Fill Your name <br>";
        $err = 0;
    }
    if(empty($phone)){
        $errPhone =  "Fill Your phone <br>";
        $err = 0;
    }
    if(empty($address)){
        $errAddress =  "Fill Your address <br>";
        $err = 0;
    }
    if(empty($email)){
        $errEmail = "Fill your email";
        $err = 0;
    }

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errEmail = "Email must be in proper format";
        $err = 0;
    }
    if(empty($_POST['gender'])){
        $errGender = 'Should not be empty';
        $err = 0;
    }
    if($_POST['country'] == "none"){
        $errCountry = "Select one country";
        $err = 0;
    }
    if(empty($hobbies)){
        $errHobbies = "check your hobbies";
        $err = 0;
    }
    if($err == 1){
        $faculty=$_POST['faculty'];
        foreach($faculty as $value){
            echo $value;
        }
        echo "$name $address $email $phone";
    }
}
?>

<form method="post" action="">
    <label for="name">Name: </label>
    <input type="text" id="name" name="name">
    <span class="error"><?php echo $errName ?></span>
    <br>
    <label for="email">Email: </label>
    <input type="email" id="email" name="email">
    <span class="error"><?php echo $errEmail ?></span>
    <br>
    <label for="phone">Phone: </label>
    <input type="number" id="phone" name="phone">
    <br>
    <span class="error"><?php echo $errPhone ?></span>
    <label for="address">Address: </label>
    <input type="text" id="address" name="address">
    <br>
    <span class="error"><?php echo $errPhone ?></span>
    Gender:
    <input type="radio" name="gender">Male
    <input type="radio" name="gender">Female
    <br>
    <span class="error"><?php echo $errGender ?></span>
    <br>
    Country
    <select name="country" id="c_id">
        <option value="none">--Select One--</option>
        <option value="nepal">Nepal</option>
        <option value="india">India</option>
        <option value="china">China</option>
    </select>
    <span class="error"><?php echo $errCountry ?></span>
    <br>
    Hobbies:
    <input type="checkbox" name="faculty[]" value="cricket">Cricket
    <input type="checkbox" name="faculty[]" value="football">Football
    <input type="checkbox" name="faculty[]" value="tabletennis">Table Tennis
    <span class="error"><?php echo $errHobbies ?></span>
    <br>
    <input type="submit" name="submit">
</form>
</body>
</html>
