<?php

echo fpb(36,60);


function fpb($a,$b){
	if($a == 0 || $b==0){
		return 0;
	}
	if($a==$b){
		return $a;
	}
	if($a > $b){
		return fpb($a-$b,$b);
	}
	return fpb($a,$b-$a);
}

// 36,60
// 36,24
// 12,24
// 12,0