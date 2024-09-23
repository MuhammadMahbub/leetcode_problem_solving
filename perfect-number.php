<?php 
// leetcode hang korse ------------------------------
function checkPerfectNumber($num) {
        $arr = [];
        $c = $num/2;
        for($i=1; $i<=$c; $i++){
            if($num%$i == 0){
                array_push($arr, $i);
            }
        }

        $new_num  = 0;
        $count = count($arr);
        for($i=0; $i<$count; $i++){
            $new_num  += $arr[$i];
        }
        
        if($new_num == $num){
            return true;
        }else{
            return "f";
        }
}

$num = 128;
echo checkPerfectNumber($num);