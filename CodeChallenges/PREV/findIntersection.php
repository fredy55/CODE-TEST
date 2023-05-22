<?php 

function FindIntersection($strArr) {
    list($strArr1, $strArr2)  = $strArr;
    $arr1 = explode(', ', $strArr1);
    $arr2 = explode(', ', $strArr2);

    $strArr = array_intersect($arr1, $arr2);

    if(is_null($strArr) || empty($strArr)) return "false";
    
    // code goes here
    return rtrim(implode(',', $strArr));

}


//$strArr = ["1, 3, 4, 7, 13", "1, 2, 4, 13, 15"];
$strArr =  array("1, 3, 9, 10, 17, 18", "1, 4, 9, 10");
echo FindIntersection($strArr);
