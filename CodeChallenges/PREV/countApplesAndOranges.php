<?php 

function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
    // Write your code here
    $applePointCount = 0;
    $orangePointCount = 0;
    
    //Apple positions
    foreach ($apples as $apple) {
        $applePoint = $a + $apple;

        if ($applePoint >= $s && $applePoint <= $t) {
            $applePointCount++;
        }
    }

    //Orange positions
    foreach ($oranges as $orange) {
        $orangePoint = $b + $orange;

        if ($orangePoint >= $s && $orangePoint <= $t) {
            $orangePointCount++;
        }
    }

    print($applePointCount."\n".$orangePointCount);
}

countApplesAndOranges(7, 11, 5, 15, [-2, 2, 1], [5, -6]);