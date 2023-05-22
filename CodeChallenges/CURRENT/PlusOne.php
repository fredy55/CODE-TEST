<?php 

/**
 * @param Integer[] $digits
 * @return Integer[]
 */
function plusOne($digits) {
    $lastIndex = count($digits)-1;
    $lastDigit = $digits[$lastIndex];

    $lastVal = $lastDigit === 9 ? [1, 0] : [$lastDigit+1];
    array_splice($digits, $lastIndex, 1, $lastVal);
    
    return $digits;
}

$digits = [9,9];
// echo plusOne($digits);
echo '<pre>';
print_r(plusOne($digits));
echo '</pre>'; 