<?php 

//Pivot index

/**
 * @param Integer[] $nums
 * @return Integer
 */
function pivotIndex($nums) {
    $sumRight = array_sum($nums);
    $sumLeft = 0;
    $len = count($nums);
    
    if ($len <2){
        return 0; 
    } 
    
    for($i=0; $i<$len; $i++) {
        $sumRight -= $nums[$i];
        
        if ($sumRight === $sumLeft){
            return $i;
        }
        
        $sumLeft +=$nums[$i];
    }
    
    return -1;
}

$nums = [1,7,3,6,5,6];
//$nums = [1,2,3];
//$nums = [2,1,-1];
//$nums = [-1,-1,0,0,-1,-1];
//$nums = [-1,1,-1,-1,0,1];

//echo pivotIndex($nums);

$nums = [1,7,3,6,5,6];
$len = count($nums);
$nums[$len] = 10;

for($i=$len-3; $i>=3; $i--) {
    $nums[$i +1] = $nums[$i];
}

$nums[3]=43;

echo '<pre>';
print_r($nums);
echo '<pre>';