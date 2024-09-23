<?php 
// leetcode hang korse ..................................
function findRestaurant($list1, $list2) {
    $counts = [];
    for ($i = 0; $i < count($list1); $i++) {
        for ($j = 0; $j < count($list2); $j++) {
            if ($list1[$i] === $list2[$j]) {
                $counts[$list1[$i]] = $i + $j;
            }
        }
    }
    $minValue = min($counts);
    $newarr = [];
    foreach($counts as $key=>$c){
        if($c == $minValue){
            $newarr[]=$key;
        }
    }
    print_r([$newarr]);

    // **********************************************************************
    // $minItems = array_filter($counts, function($item) use ($minValue) {
    //     return $item == $minValue;
    // });
    // print_r(array_keys($minItems));

    
}

$list1 = ["happy","sad","good"]; 
$list2 = ["sad","happy","good"];
echo findRestaurant($list1, $list2);