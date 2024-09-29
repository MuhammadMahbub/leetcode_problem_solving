<?php
function climbStairs($n)
{
    if ($n <= 3) {
        return $n;
    }
    $a = 2;
    $b = 3;
    for ($i = 4; $i <= $n; $i++) {
        $s = $a + $b;
        $a = $b;
        $b = $s;
    }
    return $s;

    // ********************************************
    // return round(pow((sqrt(5)+1)/2, $n+1) / sqrt(5));


    // ***********************************************************

    // if ($n <= 3) return $n;

    // $fibonacci = [0,1,2,3];

    // for ($i=4; $i<=$n; $i++) {
    //     $num = $fibonacci[$i-1] + $fibonacci[$i-2];
    //     $fibonacci[] = $num;
    // }
}

$n = 6;
echo climbStairs($n);
