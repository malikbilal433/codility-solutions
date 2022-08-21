<?php
function solutions($A){

    // For set empty array condition
    $length = count($A);
    if(empty($A)){
        return 0;
    }
    
    // For set Array length condition
    if($length < 0 || $length > 100000){
        return 0;
    }
    sort($A);

    // Loop the array for get results
    for($i=0;$i < $length; $i++){

        // For set Array value range condition
        if($A[$i] < -abs(2147483648) || $A[$i] > 2147483647 || !is_integer($A[$i])){
            return 0;
        }
        if($i < $length - 2){

            // For validation
            if(checktriangle($A[$i],$A[$i+1] , $A[$i+2])){
                return 1;
            }
        }
    }
    // For found nothing
    return 0;
}
function checktriangle($p,$q,$r){
    if(($p+$q) > $r &&
        ($q+$r) > $p && 
        ($r+$p) > $q){
            return true;
        }
    return false;
}
print_r(solutions([10,50,5,1]));
