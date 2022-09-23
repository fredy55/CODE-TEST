<?php

//minMaxSum

function miniMaxSum($arr) {
    // Write your code here
    $len = count($arr);
    $sums = [];
     
    for ($i=0; $i < $len; $i++) { 
        $a = array_sum($arr) - $arr[$i];
        $sums[$i] = $a;
    }

   echo  min($sums).' '.max($sums);
}

$arr = [1, 3, 5, 7, 9];

miniMaxSum($arr);