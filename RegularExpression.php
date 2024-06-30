<?php
$num=9065479609;
if(preg_match("/^[0-9]{10}$/",$num)){
    echo "true";
}else{
    echo "false";
}
//input must start with alphabet and ends with number
$email='aayuexample1@gmail.com';
if(preg_match("/^[a-zA-Z0-9]+@[a-z]+\.[a-z]+$/",$email)){
    echo "True";
}else{
    echo "false";
}