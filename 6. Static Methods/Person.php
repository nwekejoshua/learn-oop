<?php

class Person
{
    private $name;
    private $age;

    private static $count = 0;

    public function __construct(){
        self::$count++;
    }

    public static function getCount(){
        return self::$count;
    }

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