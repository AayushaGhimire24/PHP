<?php
/*//parent class
class Human{
    //public property name
    public $name;
    //public function walk
    public function walk(){
        echo $this->name."is walking...<br/>";
    }
    //public function see
    public function see(){
        echo $this->name."is seeing...<br/>";
    }
}
//child class
class Male extends Human{
    //no codes
}
//child class
class Female extends Human{
    //no codes
}
$male=new Male();
$male->name="Aayush";
$female=new Female();
$female->name="Aayusha";
//calling human class methods
$female->walk();
$male->see();
*/

/*
class Vehicle{
  //public property name
  public $name;
  //public function start
  public function start(){
    echo $this->name."-Engine start....<br/>";
  }
  public function stop(){
    echo $this->name."-Engine stop...<br/>";
  }
}
//child class
class Car extends Vehicle{
    public function drive(){
        echo "I have".$this->name."<br/>";
        echo "Lets go on a drive...";
    }
}
$car=new Car();
$car->name="Mercedes Benz";
//calling parent class method
$car->start();
//calling child class method
$car->drive();
*/

//PROTECTED ACCESS MODIFIER INHERITANCE 
class Vehicle{
    //protected property name
    protected $name;
    //public function start
    public function start(){
        echo $this->name."-Engine start...<br/>";
    }
    //public function stop
    public function stop(){
    echo $this->name."Engine stop...<br/>";
    }
}
//child class
class Car extends Vehicle{
    public function drive(){
        //accessing name variable for Car class
        echo "I am".$this->name."<br/>";
        echo "Lets ggo...";
    }
}
$car=new Car();
//extracting from protected ,teivayera error aako
$car->name="Mercedes Benz";
//calling parent class method
$car->start();

//calling chile class method
$car->drive();

?>