<?php

require_once 'Person.php';

class Employee extends Person
{
    public $position = 'Front-end Developer';
    public $salary = '$50000';
}

$employee1 = new Employee();

echo $employee1->setName('Joshua');
echo $employee1->getName(); //using the public method getName to acesss private property
echo $employee1->getAge();