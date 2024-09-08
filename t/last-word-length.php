<?PHP

function lengthOfLastWord($s) {

    // $x = trim($s, " ");

    // $split = explode(" ", $x);
    
    // return strlen($split[count($split)-1]);

// ======================================================================

    $s = trim($s);
    $len = strlen($s) - 1;
    $count =0;

        for ($i = $len; $i >= 0; $i--) {

            if ($s[$i] === ' ') {
                break;
            }else{
                $count++;
            }
        }

        return $count;

        
}

$s = "Hello World     ";
echo lengthOfLastWord($s);