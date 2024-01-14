<?php
class Person{
    //first name of a person
    private $fname;
    private $lname;
    public function setFName($fname){
        $this->fname=$fname;
    }
    //public function to set value for lname
    public function setLName($lname){
        $this->lname=$lname;
    }
    ///public function to
    public function showName(){
        echo "My name is: " .$this->fname."".$this->lname;
    }
}
//calling the publlic function to set fname and lname
$ram=setFName("Ram");
$shrestha=setLName("shrestha");
?>