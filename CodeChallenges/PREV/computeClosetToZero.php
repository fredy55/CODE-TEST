<?php 

//computeClosetToZero

function computeClosetToZero($ts){
    $p = null;
    $n = null;

    if(empty($ts)) return 0;

    for ($i=0; $i < count($ts) ; $i++) { 
        if($ts[$i] > 0){
            $p = $p ?? $ts[$i];
            
            if($ts[$i]<$p){
                $p = $ts[$i];
            }
        }
        
        if($ts[$i] < 0){
            $n = $n ?? $ts[$i];

            if($ts[$i]>$n){
                $n = $ts[$i];
            }
        }
        
    }

    $y = -1*$n;
    if($n == null && $p>0) return $p;
    if($p == null && $n<0) return $n;
    if($n == null && $p== null) return 0;
    if($p === $y) return $p;
    if($p < $y) return $p;
    if($p > $y) return $n;

    //return $p;
}

$ts = [-7, -2,-5, -1, 2, -9];
echo computeClosetToZero($ts);