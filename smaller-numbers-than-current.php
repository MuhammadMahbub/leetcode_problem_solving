<?php 
function smallerNumbersThanCurrent($nums) {
    $arr=[];
    for($i=0; $i<count($nums); $i++){
        $sum=0;
        for($j=0; $j<count($nums); $j++){
            if($nums[$i]>$nums[$j]){
                $sum++;
            }
            $arr[$i]=$sum;
        }
    }
    print_r($arr);
}

$nums = [8,1,2,2,3];
echo smallerNumbersThanCurrent($nums);