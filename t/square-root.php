<?php 



function mySqrt($x) {

    if ($x == 0 || $x == 1) {
        return $x;
    }

    $i = 1;
    while($i*$i <= $x){
        $i++;
    }
    return $i-1;  
}

$x = 10;
echo mySqrt($x);