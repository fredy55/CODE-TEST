<?php 
//IV, IX, XL, XC, CD, CM

function inToRoman($num) {
    $romArr = [
        "M"=>1000,
        "CM"=>900,
        "D"=>500,
        "CD"=>400,
        "C"=>100,
        "XC"=>90,
        "L"=>50,
        "XL"=>40,
        "X"=>10,
        "IX"=>9,
        "V"=>5,
        "IV"=>4,
        "I"=>1
    ];
    
    $roman = "";
    $rnum = $num;

    if($num<1 || $num>3999) return "";
    
    foreach ($romArr as $sign => $value) {
        $n = $rnum % $value;
        $rem = ($rnum - $n)/$value;
        
        $rnum = $n;

        for ($i=0; $i < $rem; $i++) { 
            $roman .= $sign;
        }

        if($rnum === 0) break;
    }

    
    return $roman;
}

$num = 1214; 

echo inToRoman($num);

//var_dump(romanToInt($s));