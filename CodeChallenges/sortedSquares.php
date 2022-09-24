<?php 

//Given an integer array nums sorted in non-decreasing order, return an array of the squares of each number sorted in non-decreasing order.

/**
 * @param Integer[] $nums
 * @return Integer[]
 */
function sortedSquares($nums) {
    $nums = array_map(function($x){return $x*$x; },$nums);
    sort($nums);
    return $nums;
}