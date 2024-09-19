<?php 
function isPerfectSquare($num) {
    if($num == 1){
        return true;
    }

    $n = 1;
    while($n*$n<=$num){
        if($n*$n==$num){
            return true;
        }
        $n+=1;
    }
    return "f";
    
}

$num = 0;
echo isPerfectSquare($num);