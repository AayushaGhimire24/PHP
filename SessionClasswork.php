<?php
//Give an example of session with two session variables and their values.
session_start();
//set session variables
$_SESSION['batch']='bim';//session modify garda value change garne ho 
$_SESSION['year']=2024;
echo $_SESSION['batch'];
echo $_SESSION['year'];
?>
