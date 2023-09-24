<?php

require_once 'Person.php';

class Employee extends Person
{
    public $position = 'Front-end Developer';
    public $salary = '$50000';

}

$employee1 = new Employee();
$employee2 = new Employee();
$employee3 = new Employee();
$employee4 = new Employee();

echo $employee1->setName('Aimy');
echo $employee1->getName();
echo $employee1->setAge(24);
echo $employee1->getAge() . "<br>";
echo $employee1->getCount(); //using static method to acccess the static property count