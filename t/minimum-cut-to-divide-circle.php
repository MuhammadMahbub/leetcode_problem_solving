<?php 

function numberOfCuts($n) {
    if($n==1){
        return false;
    }
    if($n%2==0){
        return $n/2;
    }else{
        return $n;
    }
}

$n=4;
echo numberOfCuts($n);