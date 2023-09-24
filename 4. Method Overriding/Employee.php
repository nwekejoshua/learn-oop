<?php
require 'Person.php';

class Employee extends Person
{
    public $position = 'Front-end Developer';
    public function addBonus(){
        if($this->year > 1){
            $increment = $this->salary * 0.20;
            return $this->salary = $this->salary + $increment;
        }
    }
}

$employee1 = new Employee('Joshua', 30, 3, 50000);

echo $employee1->name . "<br>";
echo $employee1->age . "<br>";
echo $employee1->salary . "<br>";
echo $employee1->position . "<br>";
echo $employee1->year . "<br>";
echo $employee1->addBonus();

