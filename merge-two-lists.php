<?php 

function mergeTwoLists($list1, $list2) {
    
    $m = array_merge($list1, $list2);
    sort($m);
    return print_r($m);
}

$list1 = [1,2,4];
$list2 = [1,3,4];

echo mergeTwoLists($list1,$list2);