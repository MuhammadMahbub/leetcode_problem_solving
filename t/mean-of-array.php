<?php

function trimMean($arr)
{
    $count = count($arr);
    sort($arr);
    $min = (int)($count * 5 / 100);
    $max = (int)($count * 95 / 100);
    $sum = 0;
    for ($i = $min; $i < $max; $i++) {
        $sum += $arr[$i];
    }
    $mean = $sum / ($max - $min);
    return $mean;
}

$arr = [1,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,3];
// $arr = [6, 2, 7, 5, 1, 2, 0, 3, 10, 2, 5, 0, 5, 5, 0, 8, 7, 6, 8, 0];
// $arr = [6, 0, 7, 0, 7, 5, 7, 8, 3, 4, 0, 7, 8, 1, 6, 8, 1, 1, 2, 4, 8, 1, 9, 5, 4, 3, 8, 5, 10, 8, 6, 6, 1, 0, 6, 10, 8, 2, 3, 4];
echo trimMean($arr);
