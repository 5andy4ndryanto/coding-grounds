<?php

$arr = [21,32,43,54,65,23,43,54,65,76,87,98];

for($i=0;$i<count($arr);$i++){
	if($arr[$i]%2==0){
		echo $arr[$i]." ini adalah bilangan genap.\n";
	}else{
		echo $arr[$i]." ini adalah bilangan ganjil.\n";
	}
}