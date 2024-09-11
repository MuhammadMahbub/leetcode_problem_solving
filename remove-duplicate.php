<?php 

function removeDuplicates(&$nums) {
        
    $arr = [];

    foreach ($nums as $value) {
        if (!isset($arr[$value])) {
            echo $arr[] = $value;
        }
    }

    return count($arr);

    // ==================================================
    
        // return count(array_unique($nums));
}

$nums = [0,0,1,2,2,3,3,4,4];
echo removeDuplicates($nums);