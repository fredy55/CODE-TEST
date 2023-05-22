<?php 

/**
 * @param Integer $x
 * @return Boolean
 */
function isPalindrome($x) {
    $toStr = strval($x);
    $toArr = str_split($toStr);
    $arrRev = str_split(strrev($toStr));

    return array_values($arrRev) === array_values($toArr);
}

echo isPalindrome(-121);
// echo '<pre>';
// print_r(isPalindrome(-121));
// echo '</pre>'; 
