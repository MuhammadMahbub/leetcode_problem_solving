<?php
function isPalindrome($x) {
        
    $sort = strrev($x);

    if((int)$sort === $x){
        return true;
    }
    else {
        return false;
    }



    // for ($i = 0; $i<count($arr); $i++)
    // if($arr[0] == $arr[count($arr) - 1]){
    //     echo "ok";
    // }else{
    //     echo "no";
    // }

    // $len = strlen($x);

    // $str = '';

    // for($i = strlen($x); $i>=0; $i--){
    //     $str .= substr($x, $i, 1);
    // }

    // if((int)$str === $x){
    //     return true;
    // }
    // else {
    //     return false;
    // }



}

$x = 121;
echo isPalindrome($x);


