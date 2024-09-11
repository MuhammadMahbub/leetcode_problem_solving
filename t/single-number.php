<?php 
function singleNumber($nums) {
    
    // ****************************************************************
    // $val_count = array_count_values($nums);
    // $single_val = array_search(1,$val_count);
    // return $single_val;

    $arr = [];
    $count = count($nums);

    for ($i = 0; $i < $count; $i ++){
        if (isset($arr[$nums[$i]])) {
            unset($arr[$nums[$i]]);
        }
        else {
            $arr[$nums[$i]] = $nums[$i];
        }
    }
    // return reset($arr);



    // $arr = [];
    // $count = count($nums);
    // for ($i = 0; $i < $count; $i++) {
    //     if (in_array($nums[$i], $arr)) {
    //         $index = array_search($nums[$i], $arr);
    //         if ($index !== false) {
    //             unset($arr[$nums[$i]]);
    //         }
    //     } else {
    //         $arr[] = $nums[$i];
    //     }
    // }
    // return reset($arr);
        
}

$nums = [1,1,2];
echo singleNumber($nums);