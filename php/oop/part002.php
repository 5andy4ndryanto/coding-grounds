<?php

class Person{

    public $name;

    public $age;

    public function sentence(){
        return $this->name." is  ".$this->age." years old";
    }

}

$person = new Person;
$person->name = "John";
$person->age = 29;

echo $person->sentence();