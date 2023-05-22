<?php 

/**
 * @param String $s
 * @return Integer
 */
function lengthOfLastWord($s) {
    $strArr = explode(" ", trim($s));
    $lastWord = $strArr[count($strArr) - 1];
    return strlen($lastWord);
}

// function lengthOfLastWord($s) {
//     $s = strrev(trim($s));
//     $position = strpos($s, ' ');
//     return strlen(substr($s, 0, ($position === false) ? strlen($s) : $position));
// }