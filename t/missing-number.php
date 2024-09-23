<?php 

function missingNumber($nums) {
    $count = count($nums);

    // $max = max($nums);
    // if($max<$count){
    //     return $count;
    // }
    // for($i=0; $i<=$count; $i++){
    //     if(!array_search($i, $nums)){
    //         return $i;
    //     }
    // }

    // ***********************************

    // for($i=0; $i<=$count; $i++){
    //     if(!in_array($i, $nums)){
    //         return $i;
    //     }
    // }

    // ************************************

        $expectedSum = $count * ($count + 1) / 2;
        $actualSum = array_sum($nums);

        return ($expectedSum - $actualSum);

}

    // $nums = [0,1];
    // $nums = [3,0,1];
$nums = [9,6,4,2,3,5,7,0,1];
echo missingNumber($nums);