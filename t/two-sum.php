
<?php  



function twoSum($nums, $target) {

    foreach ($nums as $index => $num) {
        $complement = $target - $num; 

        if (isset($arr[$complement])) {
            return [$arr[$complement], $index];  
        }
        
        $arr[$num] = $index;
        
    }

    return []; 
}

 



// function twoSum($nums, $target){
//     $sum = 0;
//     $arr = [];
//     for($i=0; $i<count($nums); $i++){
//         for($j=$i+1; $j<count($nums); $j++){
//             $sum = $nums[$i] + $nums[$j];
//             if( $sum == $target){
//                $arr[0] = $i;
//                $arr[1] = $j;
//             }
//         }
        
//     }
//     return $arr;
// }

// $nums = [2, 7, 11, 15];
// $target = 22;
// print_r( twoSum($nums, $target) );


?>
