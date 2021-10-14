<?php 

class Fruit{

​
    public $name="Deyaa";
    public $price="deyaa@gmail.com";

    function __construct($name, $price){
        $this->name= $name;
        $this->price= $price;
    }
​
    public function getName(){
    return $this->name;
    }

    public function getPrice(){
        return $this->price;
        }
}
​
class Apple extends Fruit{
    public $color="green";


    function __construct($color){
        $this->color= $color;
    }
}
​

​ class Employee{
 
private $userName="Deyaa";
private $email= "deyaa@gmail.com";


  public function getUserName(){
    return $this->userName;
}

public function setEmail($email){

    $this->email= $email;

}

}

$employeeOne = new Employee();
echo $employeeOne->userName;
echo $employeeOne->email;
echo $employeeOne->getUserName();
$employeeOne->setEmail("dd@gmail.com");


?>
​
