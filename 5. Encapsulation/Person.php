<?php

class Person
{
    private $name = 'James';
    private $age = 30;

    public function setName($name){
        $this->name = $name;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
}