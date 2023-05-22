<?php 

//ArraySubset

function arraySubset($arr){
    $subsets = [[]];
    $len = count($arr);
    
    for ($i=0; $i < $len; $i++) { 
        array_push($subsets, [$arr[$i]]);

        for ($n=0; $n < $len; $n++) { 
            if($arr[$n]===$arr[$i]) continue;

            if(!in_array([$arr[$n], $arr[$i]], $subsets)){
                array_push($subsets, [$arr[$i], $arr[$n]]);
            }
            
        }
    }

   return $subsets;
}

$arr = [2,0,6];

echo '<pre>';
print_r(arraySubset($arr));
echo '</pre>';
