<?php

class Person
{
    public $name;
    public $age;
    public $year;
    public $salary;

    public function __construct($name, $age, $year, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->year = $year;
        $this->salary = $salary;
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

    public function addBonus(){
        if($this->year > 1){
            $increment = $this->salary * 0.10;
            return $this->salary = $this->salary + $increment;
        }
    }
}


// $joshua->setName("Joshua");
// $joshua->setAge(30);
// $joshua->getName();
// $joshua->getAge();
