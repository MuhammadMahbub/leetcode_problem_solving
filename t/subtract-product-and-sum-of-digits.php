<?php 

function subtractProductAndSum($n) {
    $split = str_split($n);
    $product = 1;
    $sum = 0;
    foreach($split as $digit){
        $product *= $digit;
        $sum += $digit;
        $result = $product - $sum;
    }  
    return $result;
}

$n = 111;
echo subtractProductAndSum($n);