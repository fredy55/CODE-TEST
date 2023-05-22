<?php 

 /**
 * @param Integer[] $nums
 * @param Integer $val
 * @return Integer
 */
function removeElement(&$nums, $val) {
   
    while (in_array($val, $nums)) {
        $index = array_search($val, $nums);
        array_splice($nums, $index, 1);
    }

    return count($nums);
}

// function removeElement(&$nums, $val) {
//     $nums = array_diff($nums, [$val]);
//     return count($nums);
// }

$nums = [3,2,2,3]; 
$val = 3;
echo removeElement($nums, $val);
// echo '<pre>';
// print_r(removeElement($nums, $val));
// echo '</pre>'; 