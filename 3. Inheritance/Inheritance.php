<?php
require_once 'Person.php';

class Inheritance extends Person
{
    public $position = 'Front-end Developer';
    public $salary = '$50000';
}

$inheritance = new Inheritance();

echo $inheritance->name;