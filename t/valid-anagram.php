<?php
function isAnagram($s, $t)
{
    // print_r(count_chars($s));
    if (strlen($s) != strlen($t)) {
        return false;
    } else {
        $s = str_split($s);
        $t = str_split($t);

        sort($s);
        sort($t);

        if($s === $t) {
            return true;
        }else{
            return false;
        }
    }
}

$s = "rat";
$t = "car";
echo isAnagram($s, $t);
