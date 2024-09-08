<?php 

function isPalindrome($x) {
    
    $s = strtolower(preg_replace("/[^a-zA-Z0-9]/", "", $x));
    $rev = strrev($s);

    return ($rev === $s) ? true :  false;

    if($rev === $s){
        return true;
    }
    else {
        return false;
    }

}

$x = "race a car";
isPalindrome($x);