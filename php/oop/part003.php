<?php

class Person{

    public $name;

    public $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function sentence(){
        return $this->name." is  ".$this->age." years old";
    }

}

$person = new Person("John", 30);

echo $person->sentence();