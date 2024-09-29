<?php 

function removeDuplicates(&$nums) {
   
    # way one

    // $b = [];
    // for ($i = 0; $i < count($nums); $i++) {

       

    //     if (array_search($nums[$i], $b) === false) {
    //         $b[] = $nums[$i];
    //     }
    // }
    
    // $nums = $b;

    // return count($b);


    // *********************************************************
    # way two
     
   
    $arr = [$nums[0]];
    for ($i = 1; $i <= count($nums)-1; $i++) {
        if ($nums[$i] != $nums[$i - 1]) {
            $arr[] = $nums[$i];
        }
    }
    $nums = $arr;
    return count($arr);
 
 
}

$nums = [1,1,2];
// $nums = [0,1,1,1,2,2,3,3,4];
echo removeDuplicates($nums);