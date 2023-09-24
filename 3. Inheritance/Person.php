<?php

class Person
{
    public $name = 'James';
    public $age;

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

$joshua =  new Person();

// $joshua->setName("Joshua");
// $joshua->setAge(30);
// $joshua->getName();
// $joshua->getAge();
