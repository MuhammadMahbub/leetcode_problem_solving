<?php

function finalValueAfterOperations($operations)
{
    $x = 0;
    foreach ($operations as $i) {
        
        // genious solution
        // $x += ($i[1] === '+') ? 1 : -1;
        
        if ($i == '++X' || $i == 'X++'){
            $x += 1;
        }else{
            $x -= 1;
        }
    }
    return $x;
}

$operations = ["--X", "X++", "X++"];
// $operations = ["++X", "++X", "X++"];
$operations = ["X++","++X","--X","X--"];
echo finalValueAfterOperations($operations);
