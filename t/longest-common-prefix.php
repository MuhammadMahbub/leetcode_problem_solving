<?php


function longestCommonPrefix($strs) {
    
    sort($strs);
    $newStr = '';

    $first = $strs[0];
    $last = $strs[count($strs) - 1];

    for($i = 0; $i < strlen($first); $i++){
        if($first[$i] !== $last[$i]){
            return $newStr;
        }

        $newStr .= $first[$i];
    }

    return $newStr;

    
}


$strs = ["flower","flow","flight"];
echo longestCommonPrefix($strs);