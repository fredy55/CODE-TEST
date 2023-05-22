<?php 

/**
 * @param String $haystack
 * @param String $needle
 * @return Integer
 */
function stringStr($haystack, $needle) {
    $indexArr = [];
    $stack = [];
    $nlen = strlen($needle);
    $hlen = strlen($haystack);

    for ($i=0; $i < $hlen; $i++) { 
        if($haystack[$i] === $needle[0] && ($hlen-$i+1) >= $nlen){
            array_push($stack, $i);

            for ($n=0; $n < $nlen; $n++) { 
                if($needle[$n] !== $haystack[$i+$n]){
                   array_pop($stack); 
                   break;
                }
            }
        }

    }

   return empty($stack) ? -1 : $stack[0];
}

// function strStr(string $haystack, string $needle): int {
//     $pos = strpos($haystack, $needle);
//     return $pos === false ? -1 : $pos;
// }

$haystack = "leeleetotcode";
 $needle = "leeto";
echo stringStr($haystack, $needle);
// echo '<pre>';
// print_r(isValid($s));
// echo '</pre>'; 