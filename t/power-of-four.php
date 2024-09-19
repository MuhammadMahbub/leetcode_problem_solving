<?php  

function isPowerOfFour($n) {

    $pwr = 0;
    $res = 1;

    while($res <= $n){
        if($res == $n){
            return true;
        }

        $res = pow(4, $pwr);
        $pwr += 1;
        
    }
    return "f";
    
    
       
}

$n= 64;
echo isPowerOfFour($n);