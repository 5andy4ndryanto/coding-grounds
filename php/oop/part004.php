<?php

class Bird{

    public $canFly;
    public $legCount;

    public function __construct($canFly, $legCount){
        $this->canFly = $canFly;
        $this->legCount = $legCount;
    }

    public function canFly(){
        return $this->canFly;
    }

    public function legCount(){
        return $this->legCount;
    }

}

class Pigeon extends Bird {}
class Penguin extends Bird {}

$pigeon = new Bird(true, 2);
$penguin = new Penguin(false, 2);

if($pigeon->canFly()){
    echo "Pigeon can fly \n";
}

if($penguin->canFly()){
    echo "Pigeon can fly \n";
}



