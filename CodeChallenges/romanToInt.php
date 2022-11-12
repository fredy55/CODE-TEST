<?php 
//IV, IX, XL, XC, CD, CM

function romanToInt($s) {
    $rlet = ["I", "V", "X", "L", "C", "D", "M"];
    $rnum = [1,5,10,50,100,500,1000];

    $romanArr = array_combine($rlet, $rnum);

    //$s = str_split($s);
    $len = strlen($s);

    if($len>15) return 0;
    $result = 0;

    for ($i=0; $i < $len; $i++) {
        if(!in_array($s[$i], $rlet)) return 0;

        $curr = $romanArr[$s[$i]];
        $after = $romanArr[$s[$i+1]];

        if ($i+1 == $len){
            $result += $curr;
            break;
        } 

        if($curr >= $after){
            $result += $curr;
        }elseif($curr < $after){
            $result -= $curr;
        }
    }

    
    return $result;
}

$s = "XLVIII"; 

echo romanToInt($s);

//var_dump(romanToInt($s));