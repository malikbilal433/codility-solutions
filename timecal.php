<?php
function solutions($X){
    $secs = floor($X);
    $milli = (int) (($X - $secs) * 1000);
    $hours = ($X / 3600);
    $minutes = (($X / 60) % 60);
    $seconds = $X % 60;
    $day = $X / 86400;
    $week = $X / 604800;

    
    if($week > 1)
    {
        if($hourv > 1){
            $stageTime = floor($week)."w".ceil($day+1)."d";
        }else{

            $stageTime = floor($week)."w".ceil($day)."d";
        }
    }elseif($day > 1 && $week < 1)
    {
        if($minutes >1){

            $stageTime = floor($day)."d".ceil($hours+1)."h";
        }else{

            $stageTime = floor($day)."d".ceil($hours)."h";
        }
    }elseif($hours > 1 && $week < 1 && $day < 1)
    {
        if($seconds > 1){

            $stageTime = floor($hours)."h".ceil($minutes+1)."m";
        }else{

            $stageTime = floor($hours)."h".ceil($minutes)."m";
        }
    }elseif($minutes > 1 )
    {
        $stageTime = floor($minutes)."m".ceil($seconds)."s";
    }else
    {
        $stageTime = floor($seconds)."s";
    }
    // echo $minutes;
    // echo $week;
    // echo $day;
    // echo $hours;die; 
    return $stageTime;    
}
print_r(solutions(100));
