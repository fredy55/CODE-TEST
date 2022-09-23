<?php

//Diagonal difference


function diagDiff($arr):int
{
    $sl = 0;
    $sr = 0;

    for ($i=0; $i < count($arr); $i++) { 
        $sl += $arr[$i][$i];
        $sr += $arr[$i][count($arr)-1-$i];
    }

    return abs($sl - $sr);
}

$arr = [
    [3,5,0,4],
    [9,7,4,0],
    [1,5,1,2],
    [1,4,7,1]
];

echo diagDiff($arr);



