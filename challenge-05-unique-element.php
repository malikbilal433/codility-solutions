<?php

/*
 * Complete the 'lonelyinteger' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function lonelyinteger($a) {
    // Write your code here
    $length = count($a);
    if($length >=1 && $length < 100){

		foreach ($a as $key => $value) {
			# code...
			if($value >= 0 && $value <=100){
				
				$count=0;
				foreach ($a as  $val) {
					# code...
					if($a[$key] == $val ){
						$count++;
					}
				}
				if($count == 1){
					return $a[$key];
				}
			}
		}
    }
}


$result = lonelyinteger($a);


