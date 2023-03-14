<?php 

//Misc test codes

/**
 * @param String[] $ops
 * @return Integer
 */
function calPoints($ops) {
    $arr = [];
    
    for($i = 0; $i<count($ops); $i++){
        if($ops[$i] === 'C'){
            array_pop($arr);
        }elseif($ops[$i] === 'D'){
            $len = count($arr) - 1;
            $x = (int)$arr[$len] * 2;
            array_push($arr, $x);
        }elseif($ops[$i] === '+'){
            $len = count($arr) - 1;
            $x = (int)$arr[$len] + (int)$arr[$len - 1];
            array_push($arr, $x);
        }else{
            array_push($arr, $ops[$i]);
        }
    }

    return (int)array_sum($arr);  
}

$ops = ['1']; //27
//$ops = ['5', '-2', '4', 'C', 'D', '9','+', '+']; //27
//$ops = ['5', '2', 'C', 'D', '+']; //30
//$ops = ['5', '2', 'C', 'D'];

// print the output
echo calPoints($ops);;