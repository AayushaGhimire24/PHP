<?php
class Person{
    //first name of person
    private $fname;
    //last name of a person
    private $lname;
    //constructor
    public function __construct($fname,$lname){//public function __Person($fname,$lname)
        //---this is older version,we cannot apply this in real time but can ask in exam
        //output my name is matra aaucha
        echo "Initializing the object...<br/>";
      $this->fname=$fname;
      $this->lname=$lname;
    }
    //public method to show name
    public function showName(){
        echo "My name is".$this->fname."".$this->lname;
    }
}
/*//class object
$per=new Person("Aayusha","Ghimire");
$per->showName();


class demo{
    public function __construct(){
        echo "constructor2...";
    }
    public function __destruct(){
        echo "destroy";
    }
}
$obj=new demo();
*/
?>