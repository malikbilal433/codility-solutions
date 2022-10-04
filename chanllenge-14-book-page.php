<?php

/*
 * Complete the 'pageCount' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER p
 */

function pageCount($n, $p) {
    // Write your code here
    
    // Considering back of last page.
    
     $n = floor($n / 2);  
    $p = floor($p / 2);
    // echo $n."\n";//3
    // echo $p."\n";//2.5
    echo $min = min($p, $n - $p);
    return floor($min); // From front, from back

}


$n = 6;

$p = 5;

$result = pageCount($n, $p);

