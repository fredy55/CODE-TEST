<?php 

function kangaroo($x1, $v1, $x2, $v2) {
    // Write your code here
    $locationDiff = $x1 - $x2;
    $speedDiff = $v2 - $v1;
    $noOfJumpsNeeded = $locationDiff / $speedDiff;

    if ($speedDiff == 0) {
        return "NO";
    } else if ($noOfJumpsNeeded > 0 && is_int($noOfJumpsNeeded)) {
        return "YES";
    } else {
        return "NO";
    }
}

echo kangaroo(63, 8, 94, 3);