<?php
function solutions($A){
    sort($A);
    $min =1;
    // For set empty array condition
    $length = count($A);
    if(empty($A)){
        return 1;
    }
    
    // For set Array length condition
    if($length < 1 || $length > 100000){
        return 1;
    }

    // Loop the array for get results
    foreach($A as $inner){

        // For set Array value range condition
        if($inner < -abs(1000000) || $inner > 1000000){
            return 1;
        }
        // For find minimum value
        if($min == $inner && is_integer($inner)){
            $min ++;
        }
    }
    // For find minimum value
    return $min;
}
print_r(solutions([5,2,3,1,'4']));
