<?php

/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function timeConversion($s) {
    
     // date("H:i:s", strtotime($s));
    
    $time = str_replace("AM", "", $s);
    $postion = strpos($time,"PM");
    if($postion > 0){
        $time = str_replace("PM", "", $s);
        $time_array = explode(":", $time);
        $miltryTime = $time_array[0] + 12;
        $result =  $miltryTime.":".$time_array[1].":".$time_array[2];
        return $result;
    }else{
        return $time;
    }
}

$s="07:05:45PM";
$result = timeConversion($s);
