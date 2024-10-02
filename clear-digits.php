<?php 

function clearDigits($s) {
    $s = str_split($s);
    foreach ($s as $k=>$item) { 
      
        if (ctype_digit($item)) {
            array_splice($s,$s[$k],$s[$k-1]);  
        } 
       
    }
  
}

$s = "abc";
echo clearDigits($s);