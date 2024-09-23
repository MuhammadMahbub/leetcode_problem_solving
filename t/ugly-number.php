<?php 

function isUgly($n) {
    // if($n == 1){
    //     return true;
    // }

    // if($n <= 0){
    //     return false;
    // }

    // while($n%2==0){
    //     $n=$n/2;
    // }
    // while($n%3==0){
    //     $n=$n/3;
    // }
    // while($n%5==0){
    //     $n=$n/5;
    // }

    // if($n==1){
    //     return true;
    // }else{
    //     return "f";
    // };

    // ****************************************

    if( $n <= 0 ) {
        return false;
    }

    if( $n <= 6 ) {
        return true;
    }

    while( $n >= 2 ) {
        if( $n % 2 == 0 ) {
            $n = $n / 2;
        }
        else if ( $n % 3 == 0 ) {
            $n = $n / 3;
        }
        else if ( $n % 5 == 0 ) {
            $n = $n / 5;
        }
        else {
            return false;
        }
    }

    return true;
}

$n = 14;
echo isUgly($n);