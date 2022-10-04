<?php

/*
 * Complete the 'flippingBits' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts LONG_INTEGER n as parameter.
 */

function flippingBits($n) {
    // Write your code here
	$binary = sprintf('%032b', $n);
      $fliped = strtr($binary, "10","01");
      return bindec($fliped);
}
$n = "3";
echo   $result = flippingBits($n);

