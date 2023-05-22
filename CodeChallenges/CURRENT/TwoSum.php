<?php 

/**
* @param Integer[] $nums
* @param Integer $target
* @return Integer[]
*/
function twoSum($nums, $target) {
    $arrLen = count($nums);

    for($n = 0; $n<$arrLen; $n++){

        for($m = $n+1; $m<$arrLen; $m++){
            if($nums[$n] == $target - $nums[$m]){
                return [$n, $m];
            }
        } 
    }
}