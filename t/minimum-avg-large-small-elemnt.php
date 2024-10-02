<?php 

function minimumAverage($nums) {
    $left = 0;
    $right = count($nums)-1;
    sort($nums);
    $average = [];

    while ($left < $right) {
        $avg = ($nums[$left] + $nums[$right]) / 2;
        $average[] = $avg;
        $avg;
        $left++;
        $right--;
    }
    return min($average);

}

$nums= [7,8,3,4,15,13,4,1];
echo minimumAverage($nums);