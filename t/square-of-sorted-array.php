<?php 

function sortedSquares($nums) {
    $arr =[];
    foreach($nums as $num){
        $arr[] = $num*$num; 
    }  
    sort($arr);
    print_r($arr);
}

$nums = [-4,-1,0,3,10];
echo sortedSquares($nums);