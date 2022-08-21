<?php
function solutions($X,$B ,$Z){

    $downloadedBites = array_sum($B);
    $remainDownload = abs($downloadedBites - $X) ;
    $length = count($B);
    $averageTime = ( $B[$length - 1] + $B[$length - 2] ) / $Z;
    // echo $averageTime;die;
    $reminingTime = $remainDownload / $averageTime;
    if($reminingTime > 1){
        $remainTime = ceil($reminingTime);
        return (int)$remainTime;
    }else if(!$reminingTime){

        return 0;
    }
    return -1;
}

print_r(solutions(100,[10,6,6,8],2));
