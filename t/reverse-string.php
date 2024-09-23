<?php

function reverseString(&$s)
{
    // $len = count($s);
    // $arr = [];
    // for ($i = $len - 1; $i >= 0; $i--) {
    //     array_push($arr, $s[$i]);
    // }
    // $s = $arr;
    // print_r($s);

    // ********************************************

    $left = 0;
    $right = count($s) - 1;

    while ($left < $right) {
        // Swap the characters at the left and right pointers
        $temp = $s[$left];
        $s[$left] = $s[$right];
        $s[$right] = $temp;

        // Move the pointers towards the center
        $left++;
        $right--;
    }
    // return $s;
    print_r($s);
}

$s = ["H","a","n","n","a","h"];
echo reverseString($s);
