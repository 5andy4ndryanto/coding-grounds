<?php

$object  = new stdClass;

$object->name = "Sandy Andryanto";
$object->names = ["Budi","Adi","Jaka","Diki"];

//echo $object->name;

foreach($object->names as $name){
    echo $name."\n";
}

