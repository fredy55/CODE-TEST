<?php 

function solution($A) {
    // write your code in PHP7.0
    $max = max($A);
    if($max<=0) return 1;

    for ($i=1; $i < $max+1; $i++) { 
        if(!in_array($i, $A)){
           return $i;
        }
    }

    return $max+1;
}

//$A = [1, 3, 6, 4, 1, 2];
//$A = [1, 2, 3];
$A = [-1, -3];

echo solution($A);