<?php 

//duplicateZeros

 /**
 * @param Integer[] $arr
 * @return NULL
 */
function duplicateZeros($arr) {
    $len = count($arr);
    $counter = 0;

    while($counter < $len) {
        if($arr[$counter]==0){
            for ($j = $len-1; $j > $counter; $j--) {
                $arr[$j+1] = $arr[$j];
            }

            $arr[$counter+1]=0;

            $counter++;

            array_pop($arr);
        }
        
        $counter++;
    }

    return $arr;
}

$arr = [1,0,2,3,0,4,5,0];

echo '<pre>';
print_r(duplicateZeros($arr));
echo '<pre>';
