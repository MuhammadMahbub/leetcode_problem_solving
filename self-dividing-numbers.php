<?php

function selfDividingNumbers($left, $right)
{
    $arr = [];
    for ($i = $left; $i <= $right; $i++) {
        $digit = str_split($i);
        $len = count($digit);
        for ($j = 0; $j < $len; $j++) {
            if ($digit[$j] != 0) {
                if ($i % $digit[$j] == 0) {
                    $arr[] = $i;
                }
            }
        }
        print_r($arr);
    }
}

$left = 1;
$right = 22;
echo selfDividingNumbers($left, $right);
