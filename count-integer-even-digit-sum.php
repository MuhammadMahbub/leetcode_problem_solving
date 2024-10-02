<?php 
function countEven($num) {
    $c = $d = 0;
    for($i=1; $i<=$num; $i++){
        $split = $i;
        if((int)$split[0]%2 == 0){
            if($i%2 == 0){
                $c += 1;
            } 
        }else{
            if($i%2 != 0){
                $d += 1;
            } 
        }
    }
    return $c + $d;    
}

$num = 30;
echo countEven($num);