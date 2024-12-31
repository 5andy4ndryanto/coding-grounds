<?php

$number = rand(1000,10000);

echo $number." = ".translator($number);




function translator($n){
	 if($n >= 0 && $n <= 11){
		if($n == 1){
			return "Satu";
		}else if($n==2){	
			return "Dua";
		}else if($n==3){
			return "Tiga";	
		}else if($n==4){
			return "Empat";	
		}else if($n==5){
			return "Lima";
		}else if($n==6){
			return "Enam";
		}else if($n==7){
			return "Tujuh";
		}else if($n==8){
			return "Delapan";
		}else if($n==9){
			return "Sembilan";
		}else if($n==10){
			return "Sepuluh";
		}else if($n==11){
			return "Sebelas";
		}else{
			return "";
		}
	}else if($n > 11 && $n <= 20){
		if($n==12){	
			return "Dua Belas";
		}else if($n==13){
			return "Tiga Belas";	
		}else if($n==14){
			return "Empat Belas";	
		}else if($n==15){
			return "Lima Belas";
		}else if($n==16){
			return "Enam Belas";
		}else if($n==17){
			return "Tujuh Belas";
		}else if($n==18){
			return "Delapan Belas";
		}else if($n==19){
			return "Sembilan Belas";
		}else{
			return "Dua Puluh";
		}
	}else if($n >=20 && $n<=100){
		 if($n < 100){
		 	return translator(floor($n/10))." Puluh ".translator($n%10);
		 }else{
		 	return "Seratus";
		 }
	}else if($n > 100 && $n<=1000){
		 if($n < 1000){
		 	 if($n > 100 && $n<= 199){
		 	 	return  "Seratus ".translator(floor($n%100));
		 	 }else{
		 	 	return translator(floor($n/100))." Ratus ".translator($n%100);
		 	 }
		 }else{
		 	return "Seribu";
		 }
	}else if($n > 1000 && $n<10000){
		if($n < 10000){
		 	 if($n > 1000 && $n<= 1999){
		 	 	return  "Seribu ".translator(floor($n%1000));
		 	 }else{
		 	 	return translator(floor($n/1000))." Ribu ".translator($n%1000);
		 	 }
		 }else{
		 	return "Sepuluh Seribu";
		 }
	}else{
		return " ";
	}	
}