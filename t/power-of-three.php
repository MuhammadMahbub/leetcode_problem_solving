<?php  

function isPowerOfThree($n) {
       
    // if ($n <= 0) {
    //     return "f";
    // };

    // if($n>1){
    //     while($n%3==0){
    //         $n=$n/3;
    //     }
    //     if($n==1){
    //         return true;
    //     }else{
    //         return "a";
    //     }
    // }


    // **********************************************************

    $pwr = 0;
    $res = 1;

    while($res <= $n){
        if($res == $n){
            return true;
        }

        $res = pow(3, $pwr);
        $pwr += 1;
        
    }
    return "f";
    
    
       
}

$n= 0;
echo isPowerOfThree($n);