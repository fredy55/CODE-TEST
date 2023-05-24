<?php 

/**
 * @param Integer[] $digits
 * @return Integer[]
 */
function plusOne($digits) {
    $highestIndex = count($digits) - 1; 

    for ($n = $highestIndex; $n >= 0; $n--) {

        if (9 > $digits[$n]) {
            $digits[$n] += 1;
            return $digits;
        }
        $digits[$n] = 0;
    }

    array_unshift($digits, 1);

    return $digits;
}

$digits = [8,9,9,9];
// echo plusOne($digits);
echo '<pre>';
print_r(plusOne($digits));
echo '</pre>'; 