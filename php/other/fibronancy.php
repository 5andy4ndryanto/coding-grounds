<?php

$number = 20;

for($i=1;$i<=$number;$i++){
	$n = fib($i);
	echo $n."\n";
}

function fib($n){
	if($n<=3){
		return $n;
	}else{
		return fib($n-1) + fib($n-2);
	}
}