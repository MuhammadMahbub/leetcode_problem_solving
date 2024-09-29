<?php 
function checkStraightLine($coordinates) {
    $x1 = $coordinates[0][0];
    $y1 = $coordinates[0][1];

    $x2 = $coordinates[1][0];
    $y2 = $coordinates[1][1];

    if(($x2-$x1) != 0){
        $slope = ($y2-$y1)/($x2-$x1);
    }

   for ($i = 2; $i < count($coordinates); $i++) {
       if($x1 == $x2 || $coordinates[$i][0] == $x1 || $coordinates[$i][0] == $x2){
            return true; 
       }

    $new_slope = ($coordinates[$i][1] - $y1)/($coordinates[$i][0] - $x1);


    if ($new_slope != $slope){
        return false;
    }        
}
return true;  

}

// $coordinates = [[1,2],[2,3],[3,4],[4,5],[5,6],[6,7]];
// $coordinates = [[1,2],[1,3],[1,4]];
$coordinates = [[2,-8],[1,-3],[1,2]];
// $coordinates = [[1,4],[2,4],[3,4]];
// $coordinates = [[1,1],[2,2],[3,4],[4,5],[5,6],[7,7]];
echo checkStraightLine($coordinates);