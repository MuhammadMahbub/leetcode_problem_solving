<?php 

function removeDuplicates(&$nums) {
        
    $uniqueArray = [];

    foreach ($nums as $value) {
        if (!isset($uniqueArray[$value])) {
            echo $uniqueArray[] = $value;
        }
    }

    return count($uniqueArray);

    // ==================================================
    
        // return count(array_unique($nums));
}

$nums = [0,0,1,2,2,3,3,4,4];
echo removeDuplicates($nums);