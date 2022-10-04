<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
    // Write your code here
// array from 1 >= vslue <= 1,000,000,000
	// show min max sum
	// output > 32 bit
	$length = count($arr);
	
	$sum = [];
	$max = array_sum($arr) - $arr[0];
	$min = array_sum($arr) - $arr[0];
	foreach ($arr as $key => $value) {
		# code...
		if($value > 0 && $value <= 1000000000){

			$currentSum= array_sum($arr) - $arr[$key];
			$sum [] = $currentSum;
			if($currentSum > $max){
				$max = $currentSum;
			}
			if($currentSum < $min ){
				
				$min = $currentSum;
			}
		}


	}
	// print_r($sum);
	echo $min."\t";
	echo $max;
}
$n = '1 2 3 4 5';
$arr = explode(" ", $n); 
// print_r($arr);
miniMaxSum($arr);