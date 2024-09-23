<?php 
function majorityElement($nums) {
    $valueCounts = array_count_values($nums);
    $max = array_search(max($valueCounts), $valueCounts);
    $arr = [];
    foreach ($nums as $num) {
        if ($num == $max) {
            $arr[] = $num;
        }
    }
    if(count($arr) > count($nums)/2){
        return $max;
    }
    
}

// $nums = [3,2,3];
$nums = [3,3,4];
// $nums = [2,2,1,1,1,2,2];
echo majorityElement($nums);