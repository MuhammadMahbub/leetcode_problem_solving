<?php 
function isHappy($n) {
        if($n < 0) return false;
        $res = $n;
        $prevNums = array();
        while($res != 1)
        {
            $str = (string) $res;
            $str = str_split($str);
            $res = 0;
            for($i = 0;$i < count($str);$i++)
            {
                $j = (int) $str[$i];
                $j = pow($j, 2);
                $res += $j;
            }
            if($res == 1) return true;
            if(in_array($res, $prevNums)) return false;
            else $prevNums[] = $res;
        }
    }

    $n=19;
    echo isHappy($n);