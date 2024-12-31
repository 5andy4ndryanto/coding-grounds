<?php

$arr = [31,34,54,76,34,65,76,87,98,43,54,65,76,32,54,65];

$result = distinct($arr);

print_r($result);


function distinct($data){
	$val = array();
	$size = count($data);
	$temp = 0;
	for($i=0;$i<$size;$i++){
		for($j=0;$j<$size;$j++){
			if($data[$i]==$data[$j]){
				break;
			}
		}
		if($i==$j){
			$val[$temp] = $data[$i];
			$temp++;
		}
	}
	return $val;
}

