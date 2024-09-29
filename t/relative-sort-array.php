<?php 

function relativeSortArray($arr1, $arr2) {
    $arr = [];
    foreach($arr2 as $item2) {
        foreach($arr1 as $key1 => $item1) {
            if($item2 == $item1) {
                $arr[] = $item1;
                unset($arr1[$key1]);
            }
        }
    }
    sort($arr1);
    $a = array_merge($arr, $arr1);
    print_r($a);    
}

$arr1 = [2,3,1,3,2,4,6,7,9,2,19];
$arr2 = [2,1,4,3,9,6];
echo relativeSortArray($arr1,$arr2);