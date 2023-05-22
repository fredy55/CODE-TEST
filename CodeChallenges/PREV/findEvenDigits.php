<?php 

//Given an array nums of integers, return how many of them contain an even number of digits.

/**
 * @param Integer[] $nums
 * @return Integer
 */
function findNumbers($nums) {
    $len = count($nums);
    $numcount = 0;
     
    for($i = 0; $i< $len; $i++){
        $numstr = strval($nums[$i]);
        $digitnum = strlen($numstr);
        
        if($digitnum % 2 == 0){
            $numcount++;
        }
    }
    
    return $numcount;
 }