<?php 
// ***********hoyni ***********
function maximumProduct($nums) {
    // $pos = [];
    // $neg =[];

    // foreach($nums as $n){
    //     if($n > 0){
    //         $pos[]=$n;
    //     }else{
    //         $neg[]=$n;
    //     }
    // }
    // sort($pos);
    // sort($neg);
    // $cp =count($pos);
    // $cn =count($neg);
    // if($cp>=3){
    //     return max($pos[$cp-1]*$pos[$cp-2]*$pos[$cp-3],$neg[0]*$neg[1]*$pos[$cp-1]);
    // }elseif($cp==0){
    //    return $neg[$cn-1]*$neg[$cn-2]*$neg[$cn-3];
    // }else{
    //     return $neg[0]*$neg[1]*$pos[$cp-1];
    // }
    
// ****************************************************************

    sort($nums);
    $n = count($nums);

    return max(
        $nums[$n - 1] * $nums[$n - 2] * $nums[$n - 3],  // Three largest numbers
        $nums[0] * $nums[1] * $nums[$n - 1]            // Two smallest and the largest
    );


}

$nums0 = [-4,-3,-2,-1];
$nums = [1,2,3,4];
$nums2 = [-3,-2,3,4,5,6];
$nums1 = [-5,-4,-3,1,2];
$nums3 = [-100,-98,-1,2,3,4];
echo maximumProduct($nums1);