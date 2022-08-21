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

    $left = $A[0];
    $right = array_sum($A)-$left;
    $sum = abs($left - $right);

    // Loop the array for get results
    for($i=1; $i < $length - 1; $i++){
        // For set Array value range condition
        if($A[$i] < -abs(1000) || $A[$i] > 1000){
            return 0;
        }
        $left += $A[$i];
        $right -=$A[$i];
        $inner_sum = abs($left - $right);
        
        // For find minimum value
        if($sum > $inner_sum){
            $sum = $inner_sum;
        }
    }
    // For find minimum value
    return $sum;
}
echo solutions([3,1,2,4,3]);
