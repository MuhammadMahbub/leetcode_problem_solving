<?php 

function findNumbers($nums) {
    $count = 0;
    foreach($nums as $num){
        $len = strlen((string)$num);
        if($len%2 == 0){
            $count += 1;
        }
    }
    return $count;
}

$nums = [12,345,2,61,7896];
echo findNumbers($nums);