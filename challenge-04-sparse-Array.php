<?php

/*
 * Complete the 'matchingStrings' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. STRING_ARRAY strings
 *  2. STRING_ARRAY queries
 */


function matchingStrings($strings, $queries) {
    // Write your code here
	$n = count($strings);
  $q = count($queries);
  $count_arr= [];
  if($n >= 1 && $n <=1000 && $q >= 1 && $q <=1000){
    foreach ($queries as $key => $qry) {
      # code...
      $count=0;    
      if(strlen($qry) >=1 && strlen($qry) <= 20){
        foreach ($strings as $key => $string) {
          # code...
          if($qry == $string && strlen($string) >=1 && strlen($string) <= 20){
            $count++;
          }
        }
        $count_arr[] = (int)$count; 
   	  }   
    }
    return $count_arr;
  }
  return [];
}

$string =['ab','ab','abc'];
$query = ['ab','abc','bc'];
$res = matchingStrings($strings, $queries);

fwrite($fptr, implode("\n", $res) . "\n");

fclose($fptr);
