<?php 

//highestWeight

function highestWeight($w1, $w2, $w3){
    $wk = [$w1=>0,$w2=>1,$w3=>2];
    $w = [$w1,$w2,$w3];

    if(empty($w)) return 0;
    
    $v = max($w);

    return $wk[$v];
    
}

echo highestWeight(850, 100, 90);