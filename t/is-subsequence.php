<?php 
function isSubsequence($s, $t) {
    $slen = strlen($s);
    $tlen = strlen($t);

    if ($slen === 0) {
        return true;
    }

    if ($slen > $tlen) {
        return false;
    }
    
    $j = 0;
    for ($i = 0; $i < $tlen; $i++) {
        if ($t[$i] === $s[$j]) {
            if($j == $slen-1){
                return true;
            }
            $j++;
        }
    }

    return "f";  
}

$s = "abc";
$t = "ahbgdc";
echo isSubsequence($s, $t);