<?php

function findGCD($nums)
{
    $min = min($nums);
    $max = max($nums);
    $arr = [];
    for ($i = 1; $i <= $min; $i++) {
        if (($max % $i == 0 && $min % $i == 0)) {
            $arr[] = $i;
        }
    }
    return max($arr);

    // *****************************************

    // for($i = $min; $i >= 1; $i--){
    //     if($min % $i == 0 && $max % $i == 0) return $i;
    // }
}

$nums = [2, 5, 6, 9, 10];
// $nums = [7, 5, 6, 8, 3];
// $nums = [3, 3];
echo findGCD($nums);
