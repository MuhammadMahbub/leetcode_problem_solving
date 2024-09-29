<?php 

function dayOfYear($date) {
     $date = explode('-', $date); 
     $days = $date[2];
     $months = [31,28,31,30,31,30,31,31,30,31,30,31];
     if (($date[0] % 400 == 0) || ($date[0] % 100 != 0) && ($date[0] % 4 == 0)) {
        $months[1] = 29;
    }
    if ($date[1] > 1) {
        for($i=0; $i < $date[1]-1; $i++) {
            $days = $months[$i] + $days;
        }
    }
    return (int)$days;
}

// $date = "2019-01-09";
$date = "1900-05-02";
echo dayOfYear($date);