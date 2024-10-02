<?php
//confusion
function maxLengthBetweenEqualCharacters($s)
{
    $res = -1;
    $arr = [];
    for($i=0; $i<strlen($s); $i++){
        if(isset($arr[$s[$i]])){
            $res = max($res, ($i - $arr[$s[$i]]) - 1); //confusion
        } else {
            $arr[$s[$i]] = $i;
        }
    }

// ***************************************************
    // $len = strlen($s);
    // $res = -1;
    // for ($i = 0; $i < $len; $i++) {
    //     $temp = 0;
    //     for ($j = $len - 1; $j > $i; $j--) {
    //         if ($s[$i] == $s[$j]) {
    //             $temp = ($j - $i) - 1;
    //             $res = max($res, $temp);
    //             break;
    //         }
    //     }
    // }

    return $res;
}

$s = "abca";
$s = "mgntdygtxrvxjnwksqhxuxtrv";
echo maxLengthBetweenEqualCharacters($s);
