<?php  

function intersection($nums1, $nums2) {
    
    $max = max($nums1,$nums2);
    $min = min($nums1,$nums2);
    $count = count($min);
    $arr = [];
    for($i=0; $i<$count; $i++){
        if(in_array($min[$i], $max)){
            $arr[] = $min[$i];
            // unset($min[$i]);
        }
    }
    print_r($arr);
        
}

$nums1 = [1,2]; 
$nums2 = [1,1];
echo intersection($nums1, $nums2);