<?php

function removeElement(&$nums, $val) {
    // $nums = array_diff($nums, [$val]);
    // return count($nums);
    
    // ****************************************************************************


    // foreach ($nums as $key => $num) {
    //     if ($num == $val) unset($nums[$key]);
    // }
    // return count($nums);

    // *************************************************
    
    $count = count($nums);
    for($i=0; $i<$count; $i++){
        if($nums[$i] == $val){
            unset($nums[$i]);
        }
    }    
    return count($nums);
}

$nums = [3,2,2,3]; 
$val = 2;
echo removeElement($nums, $val);