<?php 

    function addDigits($num) {
        if($num  < 10){
            return $num;
        }
        $new_num  = 0;
        $split = str_split($num);
        $count = count($split);
        for($i=0;$i<$count; $i++){
            $new_num  += $split[$i];
        }
        if($new_num  < 10){
            return $new_num ;
        }else{
            return addDigits($new_num);
        }
    }



$num = 9992;
echo addDigits($num);