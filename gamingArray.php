<?php

//gamingArray

function gamingArray($arr) {
    // Write your code here
    $player = 'ANDY';
    
    while (count($arr) != 0) {
        $maxVal = max($arr);
        $mIndex = array_search($maxVal, $arr);
        //$gameArr = [];

        // for ($i=0; $i < $mIndex; $i++) { 
        //     $gameArr[$i] = $arr[$i];
        // }

        $arr = array_slice($arr, 0, $mIndex);

        $player = $player=='BOB'?'ANDY':'BOB'; 
    }

    return $player;
}

//$arr = [1, 3, 5, 7, 9];
$arr = [7,4,6,5,9];
echo gamingArray($arr);