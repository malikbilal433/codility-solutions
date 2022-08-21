<?php
function solutions($A){
    sort($A);
    // For set empty array condition
    $length = count($A);
    if(empty($A)){
        return 0;
    }
    
    // For set Array length condition
    if($length < 2 || $length > 10000){
        return 0;
    }
    $j=1;
    $checkNumber = 0;
    // Loop the array for get results
    for($i=0;$i < $length; $i++ , $j++){

        // For set Array value range condition
        if($A[$i] < -abs(1000) || $A[$i] > 1000){
            return 0;
        }
        if($j !== $A[$i] || $checkNumber == $A[$i]){
            return 0;
        }
        $checkNumber == $A[$i];
        
    }
    // For find minimum value
    return 1;
}
print_r(solutions([4,1,3]));
