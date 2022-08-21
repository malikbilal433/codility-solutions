<?php
function solutions($A){

    // For set empty array condition
    $length = count($A);
    if(empty($A)){
        return 0;
    }
    
    // For set Array length condition
    if($length < 3 || $length > 100000){
        return 0;
    }
    sort($A);
    $maxproduct = 0;
    // Loop the array for get results
    for($i=0;$i < $length; $i++){

        // For set Array value range condition
        if($A[$i] < -abs(1000) || $A[$i] > 1000 || !is_integer($A[$i])){
            return 0;
        }
        if($A[$i] >= 0 && ( $i < $length-2) ){
            $temp = $A[$i] * $A[$i+ 1] * $A[$i+2];
            // For find minimum value
            if($maxproduct < $temp){
                $maxproduct =$temp;
            }
        }
    }
    // For find minimum value
    return $maxproduct;
}
print_r(solutions([-3,1,2,-2,5,6]));
