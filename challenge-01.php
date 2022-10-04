<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */
// Print the following 3 lines, each to 6 decimals:

// proportion of positive values
// proportion of negative values
// proportion of zeros

function plusMinus($arr) {
    // Write your code here
	$positve = 0;
	$negative = 0;
	$zero = 0;
	$length = count($arr);
	if($length > 0 && $length <100){

		foreach ($arr as $key => $value) {
			if($value >= -abs(100) && $value <=100 ){

				if($value > 0){
					$positve++;
				}elseif ($value < 0) {
					$negative++;
				}else{
					$zero++;
				}
			}
		}
		$first = $positve / $length ;
		echo number_format((float)$first, 6, '.', '')."\n";
		$second = $negative / $length ;
		echo number_format((float)$second, 6, '.', '')."\n";
		$third = $zero / $length ;
		echo number_format((float)$third, 6, '.', '')."\n";
	}
}
 $arr = [-4, 3, -9, 0, 4, 1];

plusMinus($arr);
