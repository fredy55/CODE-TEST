<?php

//Max Consecutive Ones

/**
 * @param Integer[] $nums
 * @return Integer
 */
function findMaxConsecutiveOnes($nums) {
    $counter = 0;
    $maxcont = 0;
    $len = count($nums);
    
    for($i = 0; $i< $len; $i++){
        if($nums[$i] == 1){
            $counter++;
        }

        if($nums[$i] == 0 || $i == $len-1){
            $maxcont = $maxcont >= $counter?$maxcont:$counter;
            $counter = 0;
        }
       //echo $nums[$i].' '.$counter.' '.$maxcont.'<br>';
    }
    
    return $maxcont;
}

//echo findMaxConsecutiveOnes([1,1,0,1,1,1]);
findMaxConsecutiveOnes([1,1,0,1,1,1]);