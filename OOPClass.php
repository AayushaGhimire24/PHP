<?php

/*wap on php to define a class name human which has two properties ;name and gender
make two child classes name employee and customer.It should contain the properties from
 parent class as well as its own propertiesand method to display all the information and 
 method of that particular child <classes class*/
 class Human{
    public $name;
    public $gender;

    public function classes(){
        echo $this->name."is<br/>";
    }
    public function gen(){
        echo $this->gender."<br/>";
    }
    class Employee extends Human{
    }
class Customer extends Human{
    //no codes
}
$employee=new Employee();
$employee->name="Aayush";
$customer=new Customer();
$customer->gender="male";
/*calling human class methods
$female->walk();
$male->see();
*/
 }