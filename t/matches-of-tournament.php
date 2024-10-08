<?php

function numberOfMatches($n)
{
    $total = 0;

    while ($n > 1) {
        $matches = floor($n / 2);
        $n % 2 == 0 ? $n = $matches : $n = $matches + 1;
        $total = $total + $matches;
    }

    return $total;

    // *********************************
    /***  Genious Solution ***/
    // return $n-1;
}


$n = 15;
echo numberOfMatches($n);
