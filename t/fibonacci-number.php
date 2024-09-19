<?php 
function fib($n) {
    if ($n === 0) {
        return 0;
    }
    if($n==1 || $n == 2){
    return 1; 
    }
     
    $a = $b = 1;
    
    for($i=3; $i<=$n; $i++){
    $sum = $a + $b;
    $a = $b;
    $b = $sum;
    }
    return $b;

    // *****************************
    // $ans=$this->fib($n-1)+$this->fib($n-2);
    // return $ans;
    
}


$n=9;
echo fib($n);