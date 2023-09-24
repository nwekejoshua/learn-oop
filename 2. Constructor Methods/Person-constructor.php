<?php

class Person
{
    public $name;
    public $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function setName($name){
       echo $this->name = $name;
    }
    public function setAge($age){
       echo $this->name = $age;
    }
    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
}

$joshua =  new Person('Matt', 29);

echo 'Name: ' . $joshua->getName() . "<br>";
echo 'Age: ' . $joshua->getAge();
