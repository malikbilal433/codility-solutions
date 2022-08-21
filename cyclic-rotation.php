<?php
function solutions($A,$k){

    // For set empty array condition
    $length = count($A);
    if(empty($A)){
        return [];
    }
    
    // For set Array length condition
    if((!is_integer($length) || $length < 0 || $length > 100) ||
        (!is_integer($k) || $k < 0 || $k > 100)
    ){
        return [];
    }
    while($k > 0){
        $lastElement = $A[$length - 1];
        $rotatedArray[0] = $lastElement;
        // Loop the array for get results
        for($i=0;$i < $length - 1; $i++){
            
            // For set Array value range condition
            if(!is_integer($A[$i]) || $A[$i] < -abs(1000) || $A[$i] > 1000){
                return [];
            }
            $rotatedArray[] = $A[$i];
        }
        $A = $rotatedArray;
        $rotatedArray = [];
        $k--;
    }
        // return rotated array
        return $A;
}
print_r(solutions([0,0,0],3));
