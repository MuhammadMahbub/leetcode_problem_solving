<?php 
function containsDuplicate($nums) {
    $arr = [];
    $count = count($nums);

    for ($i = 0; $i < $count; $i ++){
        if (!isset($arr[$nums[$i]])) {
            $arr[$nums[$i]] = $nums[$i];
        }else{
            return true;
        }
    }
    return "f";
}

$nums = [1,2,3,4];
echo containsDuplicate($nums);