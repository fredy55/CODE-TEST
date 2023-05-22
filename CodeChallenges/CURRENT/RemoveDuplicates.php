<?php 

/**
 * @param Integer[] $nums
 * @return Integer
 */
function removeDuplicates(&$nums) {
    $uniqArr = [];
    $len = count($nums);
    
    for ($i=0; $i < $len; $i++) { 
       if(!in_array($nums[$i], $uniqArr)){
         array_push($uniqArr, $nums[$i]);
       }
    }
    $nums = $uniqArr;
    return count($uniqArr);
}

// function removeDuplicates(&$nums) {
    
//     $nums = array_unique($nums);
//     return count($nums);
// }

$nums = [1,1,2];
echo removeDuplicates($nums);
// echo '<pre>';
// print_r(removeDuplicates($nums));
// echo '</pre>';