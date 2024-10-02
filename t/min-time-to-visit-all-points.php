<?php

function minTimeToVisitAllPoints($points)
{
    $totalTime = 0;
    $count = count($points);

    for ($i = 0; $i < $count - 1; $i++) {
        $x1 = $points[$i][0];
        $y1 = $points[$i][1];
        $x2 = $points[$i + 1][0];
        $y2 = $points[$i + 1][1];

        $X = abs($x2 - $x1);
        $Y = abs($y2 - $y1);

        $totalTime += max($X, $Y);
    }

    return $totalTime;
}

$points = [[1,1],[3,4],[-1,0]];
echo minTimeToVisitAllPoints($points);
