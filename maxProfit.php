<?php 

//maxProfit

function maxProfit(array $data){
    $len = count($data);
    $curSum = 0;
    $rangeArr = [];

    for ($i=0; $i < $len; $i++) { 
        $sum=0;

        for($n = $i; $n < $len; $n++){
            $sum += $data[$n];

            if($sum > $curSum){
                $curSum = $sum;
                $rangeArr[0] = $i;
                $rangeArr[1] = $n;
            }
        }

    }
    return $rangeArr;

}

$data = [-1, 9, 0, 8, -5, 6, -24];

//echo maxProfit($data);

 echo '<pre>';
 print_r(maxProfit($data));
 echo '</pre>';