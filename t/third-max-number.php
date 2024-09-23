<?php 
function thirdMax($nums) {
    $unq = array_unique($nums);
    rsort($unq);
    $count  = count($unq);

    if($count >= 3){
        return $unq[2];
    }else{
        return $unq[0];
    }
        

}

$nums = [1,3];
echo thirdMax($nums);