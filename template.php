<?php
function solutions($A){

    // For set empty array condition
    $length = count($A);
    if(empty($A)){
        return 0;
    }
    
    // For set Array length condition
    if($length < 2 || $length > 10000){
        return 0;
    }

    // Loop the array for get results
    for($i=0;$i < $length; $i++){

        // For set Array value range condition
        if($A[$i] < -abs(1000) || $A[$i] > 1000 || !is_integer($A[$i])){
            return 0;
        }
        // For find minimum value
        if($min > $A[$i]){
            $min = $A[$i];
        }
    }
    // For find minimum value
    return $min;
}
print_r(solutions([1,2,3]));
