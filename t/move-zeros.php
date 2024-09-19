<?php 

function moveZeroes(&$nums) {
    for($i=0;$i<count($nums);$i++){
        if($nums[$i]==0){
            unset($nums[$i]);
            array_push($nums, 0);
        }
    }
    return $nums;
}

$nums = [0,1,2,0,12,3];
echo moveZeroes($nums);