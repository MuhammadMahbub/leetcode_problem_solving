<?php 

function tribonacci($n) {
    if($n == 0){
        return 0;
    }
    if($n == 1 || $n == 2){
        return 1;
    }

    $tribonacci = [0,1,1];

    for ($i=3; $i<=$n; $i++) {
        $num = $tribonacci[$i-1] + $tribonacci[$i-2] + $tribonacci[$i-3];
        $tribonacci[] = $num;
    }    
    return end($tribonacci);
}

$n = 25;
echo tribonacci($n);