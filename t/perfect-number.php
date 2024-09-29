<?php 
// leetcode hang korse ------------------------------
function checkPerfectNumber($num) {
        
        $c = $num/2;
        $sum = 0;
        for($i=1; $i<=$c; $i++){
            if($num%$i == 0){
                $sum += $i;
            }
        }

        return $sum == $num;
           
}

$num = 28;
echo checkPerfectNumber($num);