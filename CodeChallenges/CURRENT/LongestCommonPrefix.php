<?php 

/**
 * @param String[] $strs
 * @return String
 */
function longestCommonPrefix($strs) {
    $comPref = "";
    $arrlen = count($strs);
    if($arrlen === 1) return $strs[0];

    foreach ($strs as $str) {
       $strs[0] = strlen($str) < strlen($strs[0]) ? $str : $strs[0];
    }
    $chars = str_split($strs[0]);



    for ($n = 0; $n < count($chars); $n++) {
        $char = $chars[$n];
        $count = 0;

        foreach ($strs as $str) {
            $arrchar = str_split($str);

            if($char === $arrchar[$n]) $count++;
        }

        if($count !== $arrlen) break;
        $comPref .= $char;
    }

    return $comPref;  
}

$strs = ["cir","car"];
echo longestCommonPrefix($strs); 