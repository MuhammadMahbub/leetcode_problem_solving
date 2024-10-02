<?php 
function canAliceWin($nums) {
    $count1 = $count2 =0;
    
     foreach ($nums as $num){
        $num < 10 ? $count1 += $num : $count2 += $num;
     }   
    
    return $count1 != $count2;
}


$nums = [1,2,3,4,10];
// $nums = [1,2,3,4,5,14];
echo canAliceWin($nums);