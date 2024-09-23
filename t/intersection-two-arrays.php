<?php  

function intersection($nums1, $nums2) {
    
    $max = max($nums1,$nums2);
    $min = min($nums1,$nums2);
    $count = count($min);
    $arr = [];
    for($i=0; $i<$count; $i++){
        if(in_array($min[$i], $max)){
            if(!in_array($min[$i], $arr)){
                $arr[] = $min[$i];
            }
        }
    }
    print_r($arr);
        
}

$nums1 = [4,9,5]; 
$nums2 = [9,4,9];
echo intersection($nums1, $nums2);