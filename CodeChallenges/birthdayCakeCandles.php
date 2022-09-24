<?php

//birthdayCakeCandles

function birthdayCakeCandles($candles) {
    // Write your code here
    $freqs = array_count_values($candles);
    $maxh = max(array_values($freqs));

    
    return $maxh; 
}

$candles = [3, 2, 1, 3, 7];

echo birthdayCakeCandles($candles);