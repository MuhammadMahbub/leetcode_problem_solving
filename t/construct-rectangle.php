<?php
function constructRectangle($area)
{

    $sqrt = (int)sqrt($area);
    for ($i = $sqrt; $i > 0; $i--) {
        if ($area % $i == 0) {
            $W = $i;
            $L = ($area / $W);
            print_r([$L, $W]);
            break;
        }
    }
    // print_r([$L,$W]);

}

$area = 122122;
echo constructRectangle($area);
