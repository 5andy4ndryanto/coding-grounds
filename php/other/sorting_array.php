<?php

$arr = [21,43,54,65,76,87,98,43,54,23,1,454,6,76,87,98];

$sort = sortArr($arr,"desc");
print_r($sort);


function sortArr($data,$type = "asc"){
	$size = count($data);

	for($i=0;$i<$size;$i++){
		for($j=0;$j<($size-1);$j++){
			if($type=="desc"){
				if($data[$i]>$data[$j]){
					$temp = $data[$i];
					$data[$i] = $data[$j];
					$data[$j] = $temp;
				}
			}else{
				if($data[$i]<$data[$j]){
					$temp = $data[$i];
					$data[$i] = $data[$j];
					$data[$j] = $temp;
				}
			}
		}
	}

	return $data;
}


