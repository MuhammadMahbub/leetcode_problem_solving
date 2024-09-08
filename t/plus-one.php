<?php

function plusOne($digits) {
    
    $count = count($digits) - 1;
   

    for($i = $count; $i >= 0; $i--){
        
        $digits[$i]++;
        if ($digits[$i] === 10) {
            $digits[$i] = 0;
        } 
        else {
            return $digits;
        }
    }

    return array_merge([1], $digits); 


}

$arr = [1,9];
print_r(plusOne($arr));

// ===========================================================

// function wayTwoPlusOne($digits) {
//     return str_split(bcadd(1,implode($digits)));
// }

// print_r(wayTwoPlusOne($arr));